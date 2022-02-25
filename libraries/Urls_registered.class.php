<?php namespace BuriPHP\Libraries;

/**
 *
 * @package BuriPHP.Libraries
 *
 * @since 1.0.0
 * @version 1.5.0
 * @license You can see LICENSE.txt
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @copyright Copyright (C) CodeMonkey - Platform. All Rights Reserved.
 */

defined('_EXEC') or die;

class Urls_registered
{
    static public $default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Pages',
                'method' => 'init'
            ],
            '/developing' => [
                'controller' => 'Pages',
                'method' => 'developing'
            ],
            '/collaborate' => [
                'controller' => 'Pages',
                'method' => 'collaborate'
            ],

            '/developments/%param%' => [
                'controller' => 'Developments',
                'method' => 'category'
            ],
            '/development/%param%' => [
                'controller' => 'Developments',
                'method' => 'development'
            ],

            '/lifestyle' => [
                'controller' => 'Blog',
                'method' => 'list'
            ],
            '/lifestyle/%param%' => [
                'controller' => 'Blog',
                'method' => 'view'
            ],

            '/contact' => [
                'controller' => 'Pages',
                'method' => 'contact'
            ],

            // '/iniciar-sesion' => [
            //     'component' => 'PlatformAccess',
            //     'controller' => 'Login',
            //     'method' => 'init',
            //     'onSession' => 'hidden'
            // ],
            // '/registrarme' => [
            //     'component' => 'PlatformAccess',
            //     'controller' => 'Register',
            //     'method' => 'init',
            //     'onSession' => 'hidden'
            // ],
            // '/logout' => [
            //     'component' => 'PlatformAccess',
            //     'controller' => 'Logout',
            //     'method' => 'init',
            //     'private' => true
            // ],
        ];
    }
}
