<?php
require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['ID'])){
	$codigo = $_GET['ID'];
	if(isset($_POST['Alterar'])){
		$sql = "update veterinario set NOME ='".$_POST['NOME']."',EMAIL='".$_POST['EMAIL']."',TELEFONE='".$_POST['TELEFONE']."',ESPECIALIZACAO ='".$_POST['ESPECIALIZACAO']."',CIDADE ='".$_POST['CIDADE']."' where ID = ".$id;

		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Veterinário atualizado com sucesso!');
				window.location.href='../php/lista-veterinarios.php';
			<script>";
		}else{
			echo 
			"<script>
				alert('Erro ao atualizar o veterinário!');
				window.location.href='../php/lista-veterinarios.php';
			<script>";
		}
	}
}

?>