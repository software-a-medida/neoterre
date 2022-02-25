<?php namespace BuriPHP\Core\Controllers;

defined('_EXEC') or die;

use \BuriPHP\System\Libraries\{Errors};

class Developments
{
	use \BuriPHP\System\Libraries\Controller;

	public function category( $params )
	{
		switch ( $params[0] ) {
			case 'casas':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'lotes':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'condos':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			
			default:
				Errors::http('404');
				break;
		}
	}

	public function development( $params )
	{
		switch ( $params[0] ) {
			case 'surenna':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'sabella':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'neoterre-houses':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'tulum-895':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'selva-maya-harmony':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'el-canto':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'sicaru':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'sihil':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'aruna':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'villagio':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'una-luna':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			case 'sukses':
				return $this->view->render(PATH_LAYOUTS . 'Developments/'. $params[0] .'.php');
				break;
			
			default:
				Errors::http('404');
				break;
		}
	}
}
