<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Core;

use AlecRabbit\WCWidth\Core\Contract\ITemplateRenderer;
use InvalidArgumentException;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

final class TemplateRenderer implements ITemplateRenderer
{
    private const DEFAULT_OPTIONS = [
        'debug' => false,
        'comments' => false,
    ];

    private Environment $twig;

    public function __construct(
        protected array $options = self::DEFAULT_OPTIONS,
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
        $template = $this->getTemplate($type);
        Logger::debug(
            sprintf(
                'Rendering template: "%s".',
                $template
            )
        );
        return
            $this->twig->render(
                $template,
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
                'versions.md' => 'versions.md.twig',
                'versions' => 'versions.php.twig',
                'zero' => 'zero.php.twig',
                'wide' => 'wide.php.twig',
                default => throw new InvalidArgumentException(sprintf('Unknown template type: "%s".', $type)),
            };
    }
}
