<?php namespace BuriPHP\Administrator\Libraries;

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

use \BuriPHP\System\Libraries\{Component};

class Urls_registered
{
    static public $default = '/blog';

    static public function urls()
    {
        $urls = [
            // '/' => [
            //     'controller' => 'Index',
            //     'method' => 'index',
            // ],

            '/help' => [
                'controller' => 'Index',
                'method' => 'help'
            ],
        ];

        $urls = array_merge($urls, Component::urls('Users'));
        $urls = array_merge($urls, Component::urls('Blog'));
        $urls = array_merge($urls, Component::urls('Media'));

        return $urls;
    }
}
