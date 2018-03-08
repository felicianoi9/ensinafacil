<?php
class Menu extends Model{

	public function getMenu(){

		$array = array();

		$sql = "SELECT * FROM menus";
		$sql = $this->db->query($sql);

		if ($sql->rowCount()>0){
			$array = $sql->fetchAll();
		}

		

		return $array;

	}
}