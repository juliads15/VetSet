<?php
require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if (isset($_GET['ID'])){
	if(!empty($_GET['ID'])){
		$sql = "delete from animal where ID = ".$_GET['ID'].";";

		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Animal excluído com sucesso!');
				window.location.href='../php/homepage.php';
			<script>";
		}else{
			echo 
			"<script>
				alert('Erro ao excluir o animal!');
				window.location.href='../php/homepage.php';
			<script>";
		}
	$con->close();
	}
	else{
		header("location:../index.html");
	}
}
else{
	header("location:../index.html");
}

?>