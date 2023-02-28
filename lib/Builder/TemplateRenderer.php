<?php

declare(strict_types=1);
// 28.02.23
namespace AlecRabbit\WCWidth\Builder;

use AlecRabbit\WCWidth\Builder\Contract\ITemplateRenderer;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

final class TemplateRenderer implements ITemplateRenderer
{
    private Environment $twig;

    public function __construct()
    {
        $dir = __DIR__ . '/../template';
        $loader = new FilesystemLoader($dir);
        $this->twig = new Environment($loader, [
            'cache' => $dir . '/.cache',
            'debug' => true,
        ]);
        $this->twig->addExtension(new DebugExtension());
    }


//
    public function render(string $type, array $data): void
    {
        $template = $type === 'zero' ? 'zero.php.twig' : 'wide.php.twig';
        echo $this->twig->render($template, ['data' => $data]);
    }
}