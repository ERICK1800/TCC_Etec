<?php
	require 'db_connection.php';
	if (isset($_GET['id'])){
		
		$userid = $_GET['id'];
		$delete_user = mysqli_query($conn,"DELETE FROM usuarios WHERE id='$userid'");
		
		if ($delete_user){
			echo "<script>
			alert('Dados apagados');
			window.location.href = 'gfadmin.php';
			</script>";
			exit;
		} else {
			echo "Opps... alguma coisa deu errado!";
		}
	} else {
		// definir o código de resposta do cabeçalho
		http_response_code(404);
		echo "<h1>Erro 404. Pagina nao encontrada!</h1></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
	}
?>
