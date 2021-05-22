<?php
require_once '../php/config.php';

function listarUsuarios(){
	$conn = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	$sql = "select * from usuario;";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		return $lista = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	else{
		return "Nenhum valor encontrado.";
	}
	$conn->close();
}

function listarUsuarioId($id){
	$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);
	$sql = "select * from usuario where ID =".$id;
	$result = $con->query($sql);
	if($result->num_rows > 0){
		return $lista = mysqli_fetch_assoc($result);
	}else{
		return 0;
	}
}

?>