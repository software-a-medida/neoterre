<?php

defined('_EXEC') or die;

class Products_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$template = $this->view->render($this, 'index');

		define('_title', Configuration::$web_page . ' | {$lang.products}');

		echo $template;
	}

	public function houses()
	{
		$template = $this->view->render($this, 'houses');

		define('_title', Configuration::$web_page . ' | {$lang.houses}');

		echo $template;
	}

	public function departments()
	{
		$template = $this->view->render($this, 'departments');

		define('_title', Configuration::$web_page . ' | {$lang.departments}');

		echo $template;
	}

	public function lots()
	{
		$template = $this->view->render($this, 'lots');

		define('_title', Configuration::$web_page . ' | {$lang.lots}');

		echo $template;
	}

	public function surenna()
	{
		$template = $this->view->render($this, 'surenna');

		define('_title', Configuration::$web_page . ' | Surenna');

		echo $template;
	}

	public function sabella()
	{
		$template = $this->view->render($this, 'sabella');

		define('_title', Configuration::$web_page . ' | Sabella');

		echo $template;
	}

	public function aruna()
	{
		$template = $this->view->render($this, 'aruna');

		define('_title', Configuration::$web_page . ' | Aruná');

		echo $template;
	}

	public function villaggio()
	{
		$template = $this->view->render($this, 'villaggio');

		define('_title', Configuration::$web_page . ' | Villaggio');

		echo $template;
	}

	public function unaluna()
	{
		$template = $this->view->render($this, 'unaluna');

		define('_title', Configuration::$web_page . ' | Una Luna');

		echo $template;
	}

	public function barriocale()
	{
		$template = $this->view->render($this, 'barriocale');

		define('_title', Configuration::$web_page . ' | Barrio Calé');

		echo $template;
	}

	public function elcanto()
	{
		$template = $this->view->render($this, 'elcanto');

		define('_title', Configuration::$web_page . ' | El Canto');

		echo $template;
	}

	public function selvamaya()
	{
		$template = $this->view->render($this, 'selvamaya');

		define('_title', Configuration::$web_page . ' | Selva Maya');

		echo $template;
	}

	public function sicaru()
	{
		$template = $this->view->render($this, 'sicaru');

		define('_title', Configuration::$web_page . ' | Sicarú');

		echo $template;
	}
}
