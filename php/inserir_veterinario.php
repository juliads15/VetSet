<?php

require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['NOME']) && isset($_POST["EMAIL"]) && isset($_POST["TELEFONE"])){
	if(!empty($_POST['NOME']) && !empty($_POST["EMAIL"]) && !empty($_POST["TELEFONE"])){
		$sql = "insert into veterinario (NOME,EMAIL,TELEFONE,ESPECIALIZACAO,CIDADE) values ('".$_POST['NOME']."','".$_POST['EMAIL']."','".$_POST['TELEFONE']."','".$_POST['ESPECIALIZACAO']."','".$_POST['CIDADE']."');";
		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Veterinário cadastrado com sucesso!');
				window.location.href='../php/lista-veterinarios.php';
			</script>";
		}else{
			echo 
			"<script>
				alert('Erro ao cadastrar o veterinário!');
				window.location.href='../php/lista-veterinarios.php';
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