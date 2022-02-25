<?php namespace BuriPHP\Core\Controllers;

defined('_EXEC') or die;

class Pages
{
	use \BuriPHP\System\Libraries\Controller;

	public function init()
	{
		global $blog;

		$blog = $this->model->get();

		return $this->view->render(PATH_LAYOUTS . 'Pages/index.php');
	}

	public function developing()
	{
		return $this->view->render(PATH_LAYOUTS . 'Pages/developing.php');
	}

	public function collaborate()
	{
		return $this->view->render(PATH_LAYOUTS . 'Pages/collaborate.php');
	}

	public function contact()
	{
		return $this->view->render(PATH_LAYOUTS . 'Pages/contact.php');
	}
}
