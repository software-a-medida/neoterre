<?php namespace BuriPHP\System\Libraries;

/**
 *
 * @package BuriPHP.Libraries
 *
 * @since 1.0.0
 * @version 1.1.0
 * @license You can see LICENSE.txt
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @copyright Copyright (C) CodeMonkey - Platform. All Rights Reserved.
 */

defined('_EXEC') or die;

class Language
{
    /**
    *
    * @var object
    */
    private $security;

    /**
    *
    * @var object
    */
    private $render;

    /**
    *
    * @var object
    */
    private $format;

    /**
    * @static
    *
    * @var string
    */
    private static $path_language;

    /**
    * Constructor.
    *
    * @return  void
    */
    public function __construct()
    {
        $this->security = new Security();
        $this->render = new Render();
        $this->format = new Format();

        self::$path_language = ( Format::check_path_admin() ) ? PATH_ADMINISTRATOR_LANGUAGE : PATH_LANGUAGE;

        $this->check_lang();
        $this->change_lang();
    }

    /**
    * Verifica el lenguaje establecido.
    *
    * @return  void
    */
    public function check_lang()
    {
        $lang_default = Security::DS(self::$path_language . ( ( Format::check_path_admin() ) ? 'es' : \BuriPHP\Configuration::$lang_default ) . '.ini');

        if ( !file_exists($lang_default) ) Errors::system('language_default_not_found', "File: {$lang_default}");
        if ( Session::exists_var('_lang') == false ) Session::set_value('_lang', \BuriPHP\Configuration::$lang_default);
        if ( !file_exists(Security::DS(self::$path_language . Session::get_value('_lang') . '.ini')) ) setcookie('_lang', \BuriPHP\Configuration::$lang_default, time() + (86400 * 30), "/");
    }

    /**
    * Obtiene el lenguaje establecido.
    *
    * @static
    *
    * @param   string    $buffer    Buffer pre-cargado.
    * @param   string    $section   Establece que seccion del lenguaje usar.
    * @param   string    $path      Establece una ruta personalizada.
    *
    * @return  string
    */
    public static function get_lang( $buffer, $section = false, $path = false )
    {
        if ( $section == false ) $section = 'General';
        if ( $path != false ) $ini = (new self)->format->import_file($path, Session::get_value('_lang'), 'ini');
        else $ini = (new self)->format->import_file(self::$path_language, Session::get_value('_lang'), 'ini');

        foreach ( $ini[$section] as $key => $value )
        {
            if ( \BuriPHP\Configuration::$debug_lang === false ) $buffer = str_replace('{$lang.' . $key . '}', $value, $buffer);
            else $buffer = str_replace('{$lang.' . $key . '}', '{$lang.' . $key . '}', $buffer);
        }

        return $buffer;
    }

    /**
    * Cambia el lenguaje.
    *
    * @return  void
    */
    private function change_lang()
    {
        if ( isset($_GET['lang']) && !empty($_GET['lang']) )
        {
            Session::unset_value('_lang');

            Session::set_value('_lang', $_GET['lang']);
            setcookie('_lang', $_GET['lang'], time() + (86400 * 30), "/");

            $ref = isset ($_GET['ref']) ? $_GET['ref'] : '';

            if ( base64_encode(base64_decode($ref, true)) === $ref ) $ref = base64_decode($ref);

            if ( empty($ref) )
            {
                $base = $_SERVER['REQUEST_URI'];
                $base = Format::replace(['?lang=' . $_GET['lang'] => ''], $base);
            }
            else $base = $ref;

            header("Location: {$this->security->protocol()}{$_SERVER['HTTP_HOST']}:{$_SERVER['SERVER_PORT']}{$base}");
        }
    }

    /**
    * Obtiene la url para cambiar el lenguaje.
    *
    * @static
    *
    * @param   string    $lang    Lenguaje que desea cambiar.
    *
    * @return  string
    */
    public static function get_lang_url( $lang )
    {
        return "lang={$lang}&ref=" . base64_encode($_SERVER['REQUEST_URI']);
    }

    /**
    * Obtiene los idiomas disponibles.
    *
    * @static
    *
    * @return  array
    */
    public function get_list_language()
    {
        $route = PATH_LANGUAGE;
        $codes_language_iso = $this->format->import_file(PATH_ADMINISTRATOR_INCLUDES, 'codes_language_iso', 'json');
        $langs = [];
        
        // Abre un gestor de directorios para la ruta indicada
        $manager = opendir($route);

        // Recorre todos los elementos del directorio
        while ( ($file = readdir($manager)) !== false )
        {
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($file != "." && $file != ".." && strlen(pathinfo($file, PATHINFO_FILENAME)) === 2 && !strpos($file, '_') && !is_dir(Security::DS($route . "/" . $file)) )
            {
                $code = pathinfo($file, PATHINFO_FILENAME);
                $key = array_search($code, array_column($codes_language_iso, 'iso1'));

                $langs[] = $codes_language_iso[$key];
            }
        }
        
        // Cierra el gestor de directorios
        closedir($manager);

        return $langs;
    }
}