<?php

require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['DESCRICAO']) && isset($_POST["TIPOPRODUTO"]) && isset($_POST["QUANTIDADE"])){
	if(!empty($_POST['DESCRICAO']) && !empty($_POST["TIPOPRODUTO"]) && !empty($_POST["QUANTIDADE"])){
		$sql = "insert into estoque (DESCRICAO,TIPOPRODUTO,QUANTIDADE) values ('".$_POST['DESCRICAO']."','".$_POST['TIPOPRODUTO']."','".$_POST['QUANTIDADE']."');";
		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Produto cadastrado com sucesso!');
				window.location.href='../php/estoque.php';
			</script>";
		}else{
			echo 
			"<script>
				alert('Erro ao cadastrar oproduto!');
				window.location.href='../php/estoque.php';
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