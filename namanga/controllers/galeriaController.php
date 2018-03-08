<?php

class galeriaController extends Controller {

	public function index(){
		$dados = array(
			'quantidade'=> 5,
			'nome'=> 'Rogério',
			'idade'=> 40
			 );




		$this->loadTemplate('galeria',$dados);
		

	}


}