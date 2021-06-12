<?php
defined('_EXEC') or die;

class Placeholders_vkye
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
        $this->buffer = $this->include_header();
        $this->buffer = $this->include_footer();

        return $this->buffer;
    }

    private function include_header()
    {
        return $this->format->include_file( $this->buffer, 'main_header' );
    }

    private function include_footer()
    {
        return $this->format->include_file( $this->buffer, 'main_footer' );
    }
}
