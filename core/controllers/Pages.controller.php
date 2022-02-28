<?php namespace BuriPHP\Core\Controllers;

defined('_EXEC') or die;

class Pages
{
	use \BuriPHP\System\Libraries\Controller;

	public function init()
	{
		define('_title', 'Neoterre | Inicio');

		global $blog;

		$blog = $this->model->get();

		return $this->view->render(PATH_LAYOUTS . 'Pages/index.php');
	}

	public function developing()
	{
		define('_title', 'Neoterre | Desarrollos');

		return $this->view->render(PATH_LAYOUTS . 'Pages/developing.php');
	}

	public function collaborate()
	{
		define('_title', 'Neoterre | Brokers');

		return $this->view->render(PATH_LAYOUTS . 'Pages/collaborate.php');
	}

	public function contact()
	{
		define('_title', 'Neoterre | Contacto');

		return $this->view->render(PATH_LAYOUTS . 'Pages/contact.php');
	}
}
