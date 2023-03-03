<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "gfimper";
	
	//Criando a conexão com o BD
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	//Checando a conexão
	if (!$conn){
		die ("Falha de conexão com o banco de dados" . mysqli_connect_error());
	}
	
?>
