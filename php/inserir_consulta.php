<?php

require_once '../php/config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST['TIPOCONSULTA']) && isset($_POST["DATA"]) && isset($_POST["HORA"])){
	if(!empty($_POST['TIPOCONSULTA']) && !empty($_POST["DATA"]) && !empty($_POST["HORA"])){
		$sql = "insert into consultas (TIPOCONSULTA,DATA,HORA,PACIENTE,VETERINARIO) values ('".$_POST['TIPOCONSULTA']."','".$_POST['DATA']."','".$_POST['HORA']."','".$_POST['PACIENTE']."','".$_POST['VETERINARIO']."');";
		if($con->query($sql) == true){
			echo 
			"<script>
				alert('Consulta cadastrada com sucesso!');
				window.location.href='../php/homepage-admin.php';
			</script>";
		}else{
			echo 
			"<script>
				alert('Erro ao cadastrar a consulta!');
				window.location.href='../php/homepage-admin.php';
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