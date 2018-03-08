<?php

class homeController extends Controller  {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		

		$dados = array(
			"depoimentos" => array()

		);

		$depo = new Depoimentos();

		$dados['depoimentos']=$depo->getDepoimentos(2);




		$this->loadTemplate('home',$dados);
		

	}
}