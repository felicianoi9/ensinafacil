<?php

require 'environment.php';

$config =  array();

if(ENVIRONMENT=='development'){
	define("BASE_URL","http://localhost/ensinafacil/");
	$config['dbname']='cms2';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';

}else{
	define("BASE_URL","http://www.ensinafacil.com.br/matematica/");
	$config['dbname'] = 'ensinafa_banco';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'ensinafa_rogerio';
	$config['dbpass'] = 't97ju21@t@t@t';


}

global $db;
try{

	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass'] );

}catch(PDOException $e){
	echo 'ERRO: '.$e->getMessage();
	exit;
}