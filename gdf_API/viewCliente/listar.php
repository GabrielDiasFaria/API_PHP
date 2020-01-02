<?php
include '../control/clienteControl.php';
$clienteControl = new ClienteControl();
header('Content-Type: application/json');
foreach($clienteControl->findAll() as $valor){
	echo json_encode($valor);
}
?>