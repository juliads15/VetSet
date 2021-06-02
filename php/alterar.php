<?php
require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['ID'])){
	$codigo = $_GET['ID'];
	if(isset($_POST['Alterar'])){
		$sql = "update usuario set NOME ='".$_POST['NOME']."',EMAIL='".$_POST['EMAIL']."',SENHA='".$_POST['SENHA']."',TELEFONE ='".$_POST['TELEFONE']."',CIDADE ='".$_POST['CIDADE']."' where ID = ".$id;

		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Usuário atualizado com sucesso!');
				window.location.href='../php/lista.php';
			<script>";
		}else{
			echo 
			"<script>
				alert('Erro ao atualizar o usuário!');
				window.location.href='../php/lista.php';
			<script>";
		}
	}
}

?>