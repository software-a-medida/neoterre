<?php
/**
 *
 * @package Valkyrie.Platform.Libraries
 *
 * @since 2.0.0
 * @version 1.0.0
 * @license You can see LICENSE.txt
 *
 * @author David Miguel Gómez Macías < davidgomezmacias@gmail.com >
 * @copyright Copyright (C) CodeMonkey - Valkyrie Platform. All Rights Reserved.
 */

defined('_EXEC') or die;

class Urls_registered_vkye
{
    static public $home_page_default = '/';

    static public function urls()
    {
        return [
            '/' => [
                'controller' => 'Index',
                'method' => 'index'
            ],
            '/desarrollador' => [
                'controller' => 'Developer',
                'method' => 'index'
            ],
            '/productos' => [
                'controller' => 'Products',
                'method' => 'index'
            ],
            '/productos/casas' => [
                'controller' => 'Products',
                'method' => 'houses'
            ],
            '/productos/departamentos' => [
                'controller' => 'Products',
                'method' => 'departments'
            ],
            '/productos/lotes' => [
                'controller' => 'Products',
                'method' => 'lots'
            ],
            '/productos/surenna' => [
                'controller' => 'Products',
                'method' => 'surenna'
            ],
            '/productos/sabella' => [
                'controller' => 'Products',
                'method' => 'sabella'
            ],
            '/productos/aruna' => [
                'controller' => 'Products',
                'method' => 'aruna'
            ],
            '/productos/villaggio' => [
                'controller' => 'Products',
                'method' => 'villaggio'
            ],
            '/productos/unaluna' => [
                'controller' => 'Products',
                'method' => 'unaluna'
            ],
            '/productos/barriocale' => [
                'controller' => 'Products',
                'method' => 'barriocale'
            ],
            '/productos/elcanto' => [
                'controller' => 'Products',
                'method' => 'elcanto'
            ],
            '/productos/selvamaya' => [
                'controller' => 'Products',
                'method' => 'selvamaya'
            ],
            '/productos/sicaru' => [
                'controller' => 'Products',
                'method' => 'sicaru'
            ],
            '/servicios' => [
                'controller' => 'Services',
                'method' => 'index'
            ],
            // '/blog' => [
            //     'controller' => 'Blog',
            //     'method' => 'index'
            // ],
            // '/blog/%param%' => [
            //     'controller' => 'Blog',
            //     'method' => 'blog_article'
            // ],
            '/faqs' => [
                'controller' => 'Faqs',
                'method' => 'index'
            ],
            '/contacto' => [
                'controller' => 'Contact',
                'method' => 'index'
            ],
            '/aviso-de-privacidad' => [
                'controller' => 'Privacy',
                'method' => 'index'
            ]
        ];
    }
}
