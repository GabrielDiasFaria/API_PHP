<?php
include '../model/clienteModel.php';
class ClienteControl{
	function insert($obj){
		$cliente = new Cliente();
		//echo $obj->titulo;
		return $cliente->insert($obj);
		header('Location:listar.php');
	}
	function update($obj,$id){
		$cliente = new Cliente();
		return $cliente->update($obj,$id);
	}
	function delete($obj,$id){
		$cliente = new Cliente();
		return $cliente->delete($obj,$id);
	}
	function find($id = null){
	}
	function findAll(){
		$cliente = new Cliente();
		return $cliente->findAll();
	}
}
?>