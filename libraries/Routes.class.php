<?php namespace BuriPHP\Libraries;

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

use \BuriPHP\System\Libraries\{Format};
use \Libraries\{Functions};

class Routes
{
    private $format;
    private $path;
    private $settings_url;

    public function __construct($path, $settings_url, $component = null)
    {
        $this->format = new Format();
        $this->path = $path;
        $this->settings_url = $settings_url;
        $this->component = $component;
    }

    public function on_change_start()
    {
        if ( isset($this->settings_url['onSession']) && $this->settings_url['onSession'] === 'hidden' )
        {
            if ( Functions::check_session() === true )
                header('Location: index.php');
        }

        if ( isset($this->settings_url['private']) && $this->settings_url['private'] === true )
        {
            if ( Functions::check_session() === false )
                header('Location: index.php');
        }
    }

    public function on_change_end()
    {
        // TODO
    }
}
