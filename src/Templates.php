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
    /**
     * Function getVersion
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 08/02/2023 04:12
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    /**
     * Function getTemplatesPath
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 06/02/2023 51:52
     */
    public static function getTemplatesPath()
    {
        return __DIR__ . '/../templates';
    }

    /**
     * Function getTemplatesExtension
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-15 03:18
     *
     * @return string
     */
    public static function getTemplatesExtension()
    {
        return '.html';
    }

    /**
     * Function render - Sử dụng Twig Template Engine
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
     *
     * @see      https://twig.symfony.com/
     */
    public static function render($template = '', $data = array())
    {
        $templatesPath = __DIR__ . '/../templates';
        $loader = new \Twig\Loader\FilesystemLoader($templatesPath);
        $twig = new \Twig\Environment($loader);
        $templateFile = $template . '.html';

        return $twig->render($templateFile, $data);
    }

    /**
     * Function nativeRender - Sử dụng Plates Template Engine
     *
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @author    : 713uk13m <dev@nguyenanhung.com>
     * @copyright : 713uk13m <dev@nguyenanhung.com>
     * @time      : 16/06/2022 33:42
     *
     * @see       https://platesphp.com/
     */
    public static function nativeRender($template = '', $data = array())
    {
        $templatesPath = __DIR__ . '/../templates';
        $templates = new \League\Plates\Engine($templatesPath);

        return $templates->render($template, $data);
    }
}
