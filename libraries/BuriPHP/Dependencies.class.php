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

class Dependencies
{
	/**
	* Constructor.
	*
	* @return  void
	*/
	public function __construct()
	{
		global $__BuriPHP_dependencies;

		$GLOBALS['__BuriPHP_dependencies'] = (!isset($GLOBALS['__BuriPHP_dependencies']) || !is_array($GLOBALS['__BuriPHP_dependencies'])) ? [] : $GLOBALS['__BuriPHP_dependencies'];
	}

	/**
	* Realiza todos los cambios de placeholder por las dependencias.
	*
	* @param	string    $buffer    Buffer pre-cargado.
	*
	* @return  string
	*/
	public function run( $buffer )
	{
		global $__BuriPHP_dependencies;

		$arr = [
			'meta' => "",
			'css' => "",
			'js' => "",
			'other' => ""
		];

		foreach ( $__BuriPHP_dependencies as $value )
		$arr[$value[0]] .= "{$value[1]}\n";

		$replace = [
			'{$dependencies.meta}' 	=> $arr['meta'],
			'{$dependencies.css}'   => $arr['css'],
			'{$dependencies.js}'    => $arr['js'],
			'{$dependencies.other}' => $arr['other']
		];

		return Format::replace($replace, $buffer);
	}

	/**
	* Agrega una dependencia.
	*
	* @param	array    $arr    Arreglo con la peticion de la dependencia.
	*
	* @return  void
	*/
	public function add( $arr = false )
	{
		if ( $arr == false )
		return null;

		$type = ( isset($arr[0]) && !empty($arr[0]) ) ? $arr[0] : null;
		$content = ( isset($arr[1]) && !empty($arr[1]) ) ? $arr[1] : null;
		$attr = ( isset($arr[2]) && !empty($arr[2]) ) ? $arr[2] : [];

		$add = null;
		$attrs = "";

		foreach ( $attr as $value ) $attrs .= "{$value} ";

		switch ( $type )
		{
			case 'meta':
			$add = "<meta content='{$content}' {$attrs}/>";
			break;
			case 'css':
			$add = "<link rel='stylesheet' href='{$content}' type='text/css' {$attrs}/>";
			break;
			case 'js':
			$add = "<script src='{$content}' {$attrs}></script>";
			break;
			case 'other':
			$add = $content;
			break;
		}

		global $__BuriPHP_dependencies;
		if ( !is_null($type) && !is_null($add) ) array_push($__BuriPHP_dependencies, [$type, $add]);
	}

}
