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

use \BuriPHP\System\Libraries\Format;

class Placeholders
{
    private $buffer;
    private $format;

    public function __construct( $buffer )
    {
        $this->format = new Format();
        $this->buffer = $buffer;
    }

    public function run()
    {
        $this->buffer = $this->include_main_header();

        return $this->buffer;
    }

    private function include_main_header()
    {
        return $this->format->include_file( $this->buffer, 'main-header' );
    }
}
