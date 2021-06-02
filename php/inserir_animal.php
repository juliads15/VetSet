<?php

require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['NOME']) && isset($_POST["TIPOANIMAL"]) && isset($_POST["RACA"])){
	if(!empty($_POST['NOME']) && !empty($_POST["TIPOANIMAL"]) && !empty($_POST["RACA"])){
		$sql = "insert into animal (NOME,TIPOANIMAL,RACA,PESO,PORTE,IDADE) values ('".$_POST['NOME']."','".$_POST['TIPOANIMAL']."','".$_POST['RACA']."','".$_POST['PESO']."','".$_POST['PORTE']."','".$_POST['IDADE']."');";
		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Animal cadastrado com sucesso!');
				window.location.href='../php/homepage.php';
			</script>";
		}else{
			echo 
			"<script>
				alert('Erro ao cadastrar o animal!');
				window.location.href='../php/homepage.php';
			</script>";
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