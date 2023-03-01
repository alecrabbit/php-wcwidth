<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ITemplateRenderer;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

final class TemplateRenderer implements ITemplateRenderer
{
    private const DEBUG_OPTIONS = [
        'debug' => true,
        'comments' => true,
    ];

    private Environment $twig;

    public function __construct(
        protected array $options = self::DEBUG_OPTIONS,
    ) {
        $dir = __DIR__ . '/../template';
        $loader = new FilesystemLoader($dir);

        $debug = $options['debug'] ?? false;

        $this->twig = new Environment($loader, [
            'cache' => $dir . '/.cache',
            'debug' => $debug,
        ]);

        if ($debug) {
            $this->twig->addExtension(new DebugExtension());
        }
    }

    public function render(string $type, array $data, ?array $options = null): string
    {
        $options ??= $this->options;
        return
            $this->twig->render(
                $this->getTemplate($type),
                [
                    'data' => $data,
                    'options' => $options,
                ]
            );
    }

    private function getTemplate(string $type): string
    {
        return
            match ($type) {
                'versions' => 'versions.php.twig',
                'zero' => 'zero.php.twig',
                'wide' => 'wide.php.twig',
                default => throw new \InvalidArgumentException(sprintf('Unknown template type: "%s".', $type)),
            };
    }
}