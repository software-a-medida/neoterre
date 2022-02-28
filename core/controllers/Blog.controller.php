<?php namespace BuriPHP\Core\Controllers;

defined('_EXEC') or die;

use \BuriPHP\System\Libraries\{Errors};

class Blog
{
	use \BuriPHP\System\Libraries\Controller;

	public function list()
	{
		define('_title', 'Neoterre | Blog');

		global $data;

		$data = $this->model->get();

		return $this->view->render(PATH_LAYOUTS . 'Blog/list.php');
	}

	public function view($params)
	{
		define('_title', 'Neoterre | Blog');

		global $data;

		$data = $this->model->get( $params[0] );

		if ( !empty($data) )
		{
			$data = $data[0];
			return $this->view->render(PATH_LAYOUTS . 'Blog/view.php');
		}
		else Errors::http('404');
	}
}
