<?php namespace BuriPHP\Administrator\Core\Controllers;

defined('_EXEC') or die;

use \BuriPHP\System\Libraries\{Component};

class Index
{
	use \BuriPHP\System\Libraries\Controller;

	public function index()
	{
		define('_title', 'Dashboard');
		return $this->view->render(PATH_ADMINISTRATOR_LAYOUTS . 'Index/index.php');
	}

	public function help()
	{
		define('_title', 'Framework Valkyrie');
		return $this->view->render(PATH_ADMINISTRATOR_LAYOUTS . 'Index/help.php');
	}
}
