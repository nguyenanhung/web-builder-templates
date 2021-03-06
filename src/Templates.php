<?php
/**
 * Project web-builder-templates
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 16/06/2022
 * Time: 01:28
 */

namespace nguyenanhung\WebBuilderTemplates;

/**
 * Class Templates
 *
 * @package   nguyenanhung\WebBuilderTemplates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Templates implements Environment
{
    public function getVersion(): string
    {
        return self::VERSION;
    }

    /**
     * Function getTemplatesPath
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-15 03:18
     *
     * @return bool|string
     */
    public static function getTemplatesPath()
    {
        return realpath(__DIR__ . '/../templates');
    }

    /**
     * Function getTemplatesExtension
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-15 03:18
     *
     * @return string
     */
    public static function getTemplatesExtension(): string
    {
        return '.html';
    }

    /**
     * Function render
     *
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 16/06/2022 32:21
     */
    public static function render(string $template = '', array $data = []): string
    {
        $templatesPath = realpath(__DIR__ . '/../templates');
        $loader        = new \Twig\Loader\FilesystemLoader($templatesPath);
        $twig          = new \Twig\Environment($loader);
        $templateFile  = $template . '.html';

        return $twig->render($templateFile, $data);
    }

    /**
     * Function nativeRender
     *
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 16/06/2022 33:42
     */
    public static function nativeRender(string $template = '', array $data = []): string
    {
        $templatesPath = realpath(__DIR__ . '/../templates');
        $templates     = new \League\Plates\Engine($templatesPath);

        return $templates->render($template, $data);
    }
}
