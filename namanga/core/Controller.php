<?php
class Controller{

	private $config;

	public function __construct(){
		$cfc = new Config();
		$this->config = $cfc->getConfig();
		

	}

	public function loadView($viewName, $viewData=array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';

	}

	public function loadTemplate($viewName, $viewData=array()){

		require 'views/templates/'.$this->config['site_template'].'.php';

	}
	public function loadTemplateInPainel($viewName, $viewData = array()) {
		include 'views/painel.php';
	}

	public function loadViewInTemplate($viewName, $viewData=array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';

	}

	public function loadMenu(){
		$menu = new Menu();

		$m = array();
		$m['menu'] = $menu->getMenu();

		$this->loadView("menu",$m);
	}
}