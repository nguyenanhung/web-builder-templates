<?php
/**
 * Project web-builder-templates
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 17/06/2022
 * Time: 00:01
 */

namespace nguyenanhung\WebBuilderTemplates;

/**
 * Part of CodeIgniter Simple and Secure Twig
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/codeigniter-ss-twig
 */

// If you don't use Composer, uncomment below
/*
require_once APPPATH . 'third_party/Twig-1.xx.x/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
*/

class BaseTemplateTwig
{
    /**
     * @var array Paths to Twig templates
     */
    protected $paths = array();

    /**
     * @var array Twig Environment Options
     * @see http://twig.sensiolabs.org/doc/api.html#environment-options
     */
    protected $config = array();

    /**
     * @var array Functions to add to Twig
     */
    protected $functions_asis = array('base_url', 'site_url');

    /**
     * @var array Functions with `is_safe` option
     * @see http://twig.sensiolabs.org/doc/advanced.html#automatic-escaping
     */
    protected $functions_safe = [
        'form_open', 'form_close', 'form_error', 'form_hidden', 'set_value',
        //		'form_open_multipart', 'form_upload', 'form_submit', 'form_dropdown',
        //		'set_radio', 'set_select', 'set_checkbox',
    ];

    /**
     * @var bool Whether functions are added or not
     */
    protected $functions_added = false;

    /** @var \Twig\Environment */
    protected $twig;

    /** @var \Twig\Loader\FilesystemLoader */
    protected $loader;

    public function __construct($params = array())
    {
        if (isset($params['functions'])) {
            $this->functions_asis =
                array_unique(
                    array_merge($this->functions_asis, $params['functions'])
                );
            unset($params['functions']);
        }
        if (isset($params['functions_safe'])) {
            $this->functions_safe =
                array_unique(
                    array_merge($this->functions_safe, $params['functions_safe'])
                );
            unset($params['functions_safe']);
        }

        if (isset($params['paths'])) {
            $this->paths = $params['paths'];
            unset($params['paths']);
        } else {
            $this->paths = [VIEWPATH];
        }

        // default Twig config
        $this->config = [
            'cache'      => APPPATH . 'cache/twig',
            'debug'      => ENVIRONMENT !== 'production',
            'autoescape' => 'html',
        ];

        $this->config = array_merge($this->config, $params);
    }

    protected function resetTwig()
    {
        $this->twig = null;
        $this->createTwig();
    }

    protected function createTwig()
    {
        // $this->twig is singleton
        if ($this->twig !== null) {
            return;
        }

        if ($this->loader === null) {
            $this->loader = new \Twig\Loader\FilesystemLoader($this->paths);
        }

        $twig = new \Twig\Environment($this->loader, $this->config);

        if ($this->config['debug']) {
            $twig->addExtension(new \Twig\Extension\DebugExtension());
        }

        $this->twig = $twig;
    }

    protected function setLoader($loader)
    {
        $this->loader = $loader;
    }

    /**
     * Registers a Global
     *
     * @param string $name  The global name
     * @param mixed  $value The global value
     */
    public function addGlobal($name, $value)
    {
        $this->createTwig();
        $this->twig->addGlobal($name, $value);
    }

    /**
     * Renders Twig Template and Set Output
     *
     * @param string $view   Template filename without `.twig`
     * @param array  $params Array of parameters to pass to the template
     */
    public function display($view, $params = array())
    {
        $CI =& get_instance();
        $CI->output->set_output($this->render($view, $params));
    }

    /**
     * Renders Twig Template and Returns as String
     *
     * @param string $view   Template filename without `.twig`
     * @param array  $params Array of parameters to pass to the template
     *
     * @return string
     */
    public function render($view, $params = array())
    {
        $this->createTwig();
        // We call addFunctions() here, because we must call addFunctions()
        // after loading CodeIgniter functions in a controller.
        $this->addFunctions();

        $view = $view . '.twig';

        return $this->twig->render($view, $params);
    }

    protected function addFunctions()
    {
        // Runs only once
        if ($this->functions_added) {
            return;
        }

        // as is functions
        foreach ($this->functions_asis as $function) {
            if (function_exists($function)) {
                $this->twig->addFunction(
                    new \Twig\TwigFunction(
                        $function,
                        $function
                    )
                );
            }
        }

        // safe functions
        foreach ($this->functions_safe as $function) {
            if (function_exists($function)) {
                $this->twig->addFunction(
                    new \Twig\TwigFunction(
                        $function,
                        $function,
                        ['is_safe' => ['html']]
                    )
                );
            }
        }

        // customized functions
        if (function_exists('anchor')) {
            $this->twig->addFunction(
                new \Twig\TwigFunction(
                    'anchor',
                    [$this, 'safe_anchor'],
                    ['is_safe' => ['html']]
                )
            );
        }

        $this->functions_added = true;
    }

    /**
     * @param string $uri
     * @param string $title
     * @param array  $attributes [changed] only array is acceptable
     *
     * @return string
     */
    public function safe_anchor($uri = '', $title = '', $attributes = array())
    {
        $uri   = escape_html($uri);
        $title = escape_html($title);

        $new_attr = array();
        foreach ($attributes as $key => $val) {
            $new_attr[escape_html($key)] = escape_html($val);
        }

        return anchor($uri, $title, $new_attr);
    }

    /**
     * Function getTwig
     *
     * @return \Twig\Environment
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 17/06/2022 17:21
     */
    public function getTwig()
    {
        $this->createTwig();

        return $this->twig;
    }
}
