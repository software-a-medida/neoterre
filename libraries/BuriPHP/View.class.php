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

class View
{
	/**
	*
	* @var object
	*/
	private $dependencies;

	/**
	*
	* @var object
	*/
	private $security;

	/**
	*
	* @var object
	*/
	private $format;

	/**
	* Constructor.
	*
	* @return  void
	*/
	public function __construct()
	{
		$this->dependencies = new Dependencies();
		$this->security = new Security();
		$this->format = new Format();
	}

	/**
	* Renderiza el html
	*
	* @param	object    $controller    Controlador principal.
	* @param	mixed     $layouts		 Informacion de los layouts a mostrar.
	*
	* @return  string
	*/
	public function render( $body = null, $head = null, $footer = null )
	{
		foreach ( $GLOBALS as $key => $value )
		{
			if ( $key != 'GLOBALS' ||
			$key != '_SERVER' ||
			$key != '_GET' ||
			$key != '_POST' ||
			$key != '_FILES' ||
			$key != '_COOKIE' ||
			$key != '_SESSION' ||
			$key != '_REQUEST' ||
			$key != '_ENV' )
			{
				global ${$key};
			}
		}

		if ( is_null($body) )
			return false;

		ob_start();

		if ( is_null($head) )
			require Security::DS(( Format::check_path_admin() ? PATH_ADMINISTRATOR_LAYOUTS : PATH_LAYOUTS ) . "/head.php");
		if ( $head != false && !is_null($head) )
			require Security::DS( $head );

		if ( !is_null($body) )
			require Security::DS( $body );

		if ( is_null($footer) )
			require Security::DS(( Format::check_path_admin() ? PATH_ADMINISTRATOR_LAYOUTS : PATH_LAYOUTS ) . "/footer.php");
		if ( $footer != false && !is_null($footer) )
			require Security::DS( $footer );

		$buffer = ob_get_contents();

		ob_end_clean();

		return $buffer;
	}

}
