<?php

//composer require "byjg/jwt-session"
//$handler = new \ByJG\Session\JwtSession('http//:localhost', 'cjka0k-jyEQnDZAikyhrHRn7');
//$handler->replaceSessionHandler(true);

session_start();
header("Content-Type: text/html; charset=ISO-8859-1",true);
require_once 'config.php';

$con = mysqli_connect(DB_SERVER,DB_USUARIO,DB_SENHA,DB_BANCO);

if(isset($_POST["EMAIL"]) && isset($_POST["SENHA"])){
	
	if(!empty($_POST["EMAIL"]) && !empty($_POST["SENHA"])){
		$sql = "select * from usuario where EMAIL = '".$_POST['EMAIL']."' and SENHA = '".$_POST['SENHA']."';";

		$result = $con->query($sql);

		if($result->num_rows > 0){
			$result = mysqli_query($con, $sql);

			if ($aux = mysqli_fetch_assoc($result)){

				session_start();

				$_SESSION['ID'] = $aux['ID'];
				$_SESSION['NOME'] = $aux['NOME'];

				if ($aux['TIPO'] == "1"){
					echo 
					"<script>
						alert('Bem Vindo Admin!');
						window.location.href='../php/homepage-admin.php';
					</script>";
				}
				else if ($aux['TIPO'] == "2"){
					echo 
					"<script>
						alert('Bem Vindo!');
						window.location.href='../php/homepage.php';
					</script>";
				}
				else{
					echo 
					"<script>
						alert('Tipo de usuário inexistente');
						window.location.href='../src/index.html';
					</script>";
				}

			}
		}else {
			echo 
			"<script>
				alert('Login ou senha incorretos!');
				window.location.href='../src/login.html';
			</script>";
		}

$con->close();
	}

	else{
		header("location:index.html");
	}
}
else{
	header("location:index.html");
}

?>