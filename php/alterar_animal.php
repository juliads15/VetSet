<?php
require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_GET['ID'])){
	$codigo = $_GET['ID'];
	if(isset($_POST['Alterar'])){
		$sql = "update animal set NOME ='".$_POST['NOME']."',TIPOANIMAL='".$_POST['TIPOANIMAL']."',RACA='".$_POST['RACA']."',PESO ='".$_POST['PESO']."',PORTE ='".$_POST['PORTE']."',IDADE ='".$_POST['IDADE']."' where ID = ".$id;

		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Animal atualizado com sucesso!');
				window.location.href='../php/homepage.php';
			<script>";
		}else{
			echo 
			"<script>
				alert('Erro ao atualizar o animal!');
				window.location.href='../php/homepage.php';
			<script>";
		}
	}
}

?>