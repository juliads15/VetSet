<?php

require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['NOME']) && isset($_POST["EMAIL"]) && isset($_POST["SENHA"])){
	if(!empty($_POST['NOME']) && !empty($_POST["EMAIL"]) && !empty($_POST["SENHA"])){
		$sql = "insert into usuario (NOME,EMAIL,SENHA,ID,TELEFONE,CIDADE) values ('".$_POST['NOME']."','".$_POST['EMAIL']."','".$_POST['SENHA']."',null,'".$_POST['TELEFONE']."','".$_POST['CIDADE']."');";
		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Usuário cadastrado com sucesso!');
				window.location.href='../php/lista.php';
			</script>";
		}else{
			echo 
			"<script>
				alert('Erro ao cadastrar o usuário!');
				window.location.href='../src/signup.html';
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