<?php
defined('_EXEC') or die;

class Developer_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$template = $this->view->render($this, 'index');

		define('_title', Configuration::$web_page . ' | {$lang.home}');

		echo $template;
	}
}
