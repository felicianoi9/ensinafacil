<?php
class Paginas extends Model{

	public function getPagina($url){
		$array=array();

		$sql =  "SELECT titulo, corpo FROM paginas WHERE url = '$url' ";

		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){

			$array=$sql->fetchAll();
		}

		

		
		return $array;
	}



	
}