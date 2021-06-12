<?php

defined('_EXEC') or die;

class Faqs_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$template = $this->view->render($this, 'index');

		define('_title', Configuration::$web_page . ' | {$lang.faqs}');

		echo $template;
	}
}
