<?php
require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['ID'])){
	$codigo = $_GET['ID'];
	if(isset($_POST['Alterar'])){
		$sql = "update consultas set TIPOCONSULTA ='".$_POST['TIPOCONSULTA']."',DATA='".$_POST['DATA']."',HORA='".$_POST['HORA']."',PACIENTE ='".$_POST['PACIENTE']."',VETERINARIO ='".$_POST['VETERINARIO']."' where ID = ".$id;

		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Consulta atualizada com sucesso!');
				window.location.href='../php/homepage-admin.php';
			<script>";
		}else{
			echo 
			"<script>
				alert('Erro ao atualizar a consulta!');
				window.location.href='../php/homepage-admin.php';
			<script>";
		}
	}
}

?>