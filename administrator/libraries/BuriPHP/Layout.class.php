<?php namespace BuriPHP\Administrator\System\Libraries;

/**
 *
 * @package BuriPHP.Administrator.Libraries
 *
 * @since 1.0.0
 * @version 1.1.0
 * @license You can see LICENSE.txt
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @copyright Copyright (C) CodeMonkey - Platform. All Rights Reserved.
 */

defined('_EXEC') or die;

use \BuriPHP\System\Libraries\{Framework,Security,Render,Language,Format,Errors,Controller,Session,Dependencies};
use \BuriPHP\Administrator\Libraries\{Urls_registered,Routes,Placeholders};

class Layout
{
    /**
    *
    * @var object
    */
    private $framework;

    /**
    *
    * @var object
    */
    private $security;

    /**
	*
	* @var object
	*/
	private $dependencies;

    /**
    *
    * @var object
    */
    private $render;

    /**
    *
    * @var object
    */
    private $language;

    /**
    *
    * @var object
    */
    private $format;

    /**
    *
    * @var object
    */
    private $system;

    /**
    *
    * @var string
    */
    private $component;

    /**
    *
    * @var string
    */
    private $controller;

    /**
    *
    * @var string
    */
    private $method;

    /**
    *
    * @var array
    */
    private $params;

    /**
    *
    * @var bool
    */
    private $exists_session;

    /**
    * Constructor.
    *
    * @return  void
    */
    public function __construct()
    {
        $this->framework = new Framework();
        $this->security = new Security();
        $this->dependencies = new Dependencies();
        $this->render = new Render();
        $this->language = new Language();
        $this->format = new Format();
        $this->system = new System();
    }

    /**
    * Imprime todo el contendio ya procesado.
    *
    * @final
    *
    * @return  string
    */
    public function execute()
    {
        $this->exists_session = $this->system->exists_session();
        $this->process_settings_page();

        ob_start("ob_gzhandler");

        $this->load_core();
        
        if ( !defined('_title') ) define('_title', \BuriPHP\Configuration::$web_page . ' - ' . Framework::PRODUCT);

        if ( !defined('_lang') ) define('_lang', 'es');

        $buffer = ob_get_contents();

        $buffer = $this->render($buffer);

        ob_end_clean();

        return $buffer;
    }

    /**
    * Prepara las variables a partir de la url para solicitar el controlador y metodos.
    *
    * @return void
    */
    private function process_settings_page() : void
    {
        if ( $this->exists_session )
        {
            $url = Security::url();

            if ( end($url) == 'logout' )
            {
                $this->set_settings_page([
                    'component' => 'PlatformAccess',
                    'controller' => 'Logout',
                    'method' => 'init'
                ]);
            }
            else if ( class_exists('\BuriPHP\Administrator\Libraries\Urls_registered') )
            {
                $urls_registered = Urls_registered::urls();

                if ( !isset(Urls_registered::$default) OR empty(Urls_registered::$default) )
                    Errors::system(null, 'The default url was not defined in <i>Urls_registered</i>.');

                if ( end($url) == '/' )
                {
                    if ( isset($urls_registered[Urls_registered::$default]) && !empty($urls_registered[Urls_registered::$default]) )
                    {
                        $this->set_settings_page( $urls_registered[Urls_registered::$default] );
                    }
                    else { Errors::system(null, 'The default url is not registered in <i>Urls_registered</i>.'); }
                }
                else
                {
                    if ( isset($urls_registered['/'. implode("/", $url)]) && !empty($urls_registered['/'. implode("/", $url)]) )
                    {
                        $this->set_settings_page( $urls_registered['/'. implode("/", $url)] );
                    }
                    else
                    {
                        $this->set_settings_page([
                            'component' => 'PlatformErrors',
                            'controller' => 'Errors',
                            'method' => 'not_found'
                        ]);
                    }
                }
            }
            else { Errors::system(null, 'Class <i>Urls_registered</i> not found in libraries.'); }
        }
        else
        {
            $this->set_settings_page([
                'component' => 'PlatformAccess',
                'controller' => 'Login',
                'method' => 'init'
            ]);
        }
    }

    /**
    * Establece el controlador, metodo y las configuraciones de la url.
    *
    * @return  void
    */
    public function set_settings_page( $argv = null ) : void
    {
        if ( is_null($argv) )
            Errors::system(null, 'No arguments were established in <i>set_settings_page()</i>.');

        if ( !isset($argv['controller']) || empty($argv['controller']) )
            Errors::system(null, 'Url controller not set in <i>Urls_registered</i>.');

        if ( !isset($argv['method']) || empty($argv['method']) )
            Errors::system(null, 'The url method was not set in <i>Urls_registered</i>.');

        if ( !isset($argv['component']) || empty($argv['component']) )
            $argv['component'] = null;

        $this->component = $argv['component'];
        $this->controller = $argv['controller'];
        $this->method = $argv['method'];
        $this->params = ( !isset($argv['params']) || empty($argv['params']) ) ? [] : $argv['params'];

        unset($argv['component'],$argv['controller'],$argv['method'],$argv['params']);

        $this->settings_url = $argv;
    }

    /**
    * Obtiene la informacion del controlador solicitado.
    *
    * @return  void
    */
    public function load_core()
    {
        if ( empty($this->controller) ) die();

        if ( $this->exists_session )
        {
            if ( isset($this->settings_url['permissions']) && is_array($this->settings_url['permissions']) )
            {
                if ( !empty(array_diff($this->settings_url['permissions'], Session::get_value('session_permissions'))) )
                {
                    $this->set_settings_page([
                        'component' => 'PlatformErrors',
                        'controller' => 'Errors',
                        'method' => 'Permission_denied'
                    ]);
                }
            }
        }

        if ( class_exists('\BuriPHP\Administrator\Libraries\Routes') )
        {
            $this->route = new Routes('/' . $this->controller . '/' . $this->method, $this->settings_url, $this->component);

            $this->route->on_change_start();
        }

        if ( !is_null($this->component) && !empty($this->component) )
        {
            $controller_path = Security::DS(PATH_ADMINISTRATOR_COMPONENTS . $this->component . DIRECTORY_SEPARATOR . $this->controller . CONTROLLER_PHP);
            $controller_class = '\BuriPHP\Administrator\Components\\'. $this->component .'\Controllers\\'. $this->controller;

            $model_path = Security::DS(PATH_ADMINISTRATOR_COMPONENTS . $this->component . DIRECTORY_SEPARATOR . $this->controller . MODEL_PHP);
            $model_class = '\BuriPHP\Administrator\Components\\'. $this->component .'\Models\\'. $this->controller;

            if ( !is_dir(PATH_ADMINISTRATOR_COMPONENTS . $this->component) )
                Errors::system(null, "The <i>{$this->component}</i> component does not exist.");

            if ( file_exists(PATH_ADMINISTRATOR_COMPONENTS . $this->component . DIRECTORY_SEPARATOR . 'Component' . CLASS_PHP) )
                require_once PATH_ADMINISTRATOR_COMPONENTS . $this->component . DIRECTORY_SEPARATOR . 'Component' . CLASS_PHP;
        }
        else
        {
            $controller_path = Security::DS(PATH_ADMINISTRATOR_CONTROLLERS . $this->controller . CONTROLLER_PHP);
            $controller_class = '\BuriPHP\Administrator\Core\Controllers\\'. $this->controller;

            $model_path = Security::DS(PATH_ADMINISTRATOR_MODELS . $this->controller . MODEL_PHP);
            $model_class = '\BuriPHP\Administrator\Core\Models\\'. $this->controller;
        }

        if ( !file_exists($controller_path) )
            Errors::system(null, "Controller <i>{$controller_path}</i> does not exist.");
        else require_once $controller_path;

        if ( !file_exists($model_path) )
            Errors::system(null, "Model <i>{$model_path}</i> does not exist.");
        else require_once $model_path;

        if ( !class_exists($model_class) )
            Errors::system(null, "Class <i>{$model_class}</i> does not exist in file model <i>{$model_path}</i>.");

        if ( !class_exists($controller_class) )
            Errors::system(null, "Class <i>{$this->controller}</i> does not exist in file controller <i>{$controller_path}</i>.");
        else
            $controller = new $controller_class();

        if ( !method_exists($controller, $this->method) )
            Errors::system(null, "Method <i>{$this->method}</i> does not exist in controller <i>{$controller_path}</i>.");
        else
            echo $controller->{$this->method}($this->params);

        if ( class_exists('\BuriPHP\Administrator\Libraries\Routes') )
            $this->route->on_change_end();
    }

    /**
    * Renderiza todo el buffer remplazando placeholder.
    *
    * @param   string    $buffer    Buffer pre-cargado.
    *
    * @return  string
    */
    public function render( $buffer )
    {
        if ( class_exists('\BuriPHP\Administrator\Libraries\Placeholders') )
        {
            $placeholders = new Placeholders( $buffer );
            $buffer = $placeholders->run();
        }

        $buffer = $this->dependencies->run($buffer);
        $buffer = $this->render->placeholders($buffer);
        $buffer = $this->render->paths($buffer);
        $buffer = Language::get_lang($buffer);

        if ( \BuriPHP\Configuration::$compress_html === true )
        {
            $buffer = preg_replace(array('//Uis', "/[[:blank:]]+/"), array('', ' '), str_replace(array("\n", "\r", "\t"), '', $buffer));
        }

        return $buffer;
    }
}
