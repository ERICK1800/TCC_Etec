<?php 
	require 'db_connection.php';
	if(isset($_POST['Cpf']) && isset($_POST['Nasc']) && isset($_POST['User']) && isset($_POST['Nome']) && isset($_POST['Email']) && isset($_POST['Senha'])) {
		// Verifica se os campos de nome de usuários e de email estão vazios
		if(!empty($_POST['Cpf']) && !empty($_POST['Nasc']) && !empty($_POST['User']) && !empty($_POST['Nome']) && !empty($_POST['Email']) && !empty($_POST['Senha'])) {
			// Ignorando ("escapando") caracteres especiais
			$user_cpf = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Cpf']));
			$user_nasc = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Nasc']));
			$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['User']));
			$user_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Nome']));
			$user_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Email']));
			$user_senha = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Senha']));
			// Verificando se o email é válido
			if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
				// Verifica se o email já existe
				$check_email = mysqli_query($conn, "SELECT 'Email' FROM usuarios WHERE Email = '$user_email'");
				if (mysqli_num_rows($check_email) > 0) {
					echo "<h3>Esse endereco de email ja existe. Por favor insira outro.</h3>";
				} else {
					// Verifica se o CPF já existe
					$check_cpf = mysqli_query($conn, "SELECT 'Cpf' FROM usuarios WHERE Cpf = '$user_cpf'");
					if (mysqli_num_rows($check_cpf) > 0) {
						echo "<h3>Esse CPF ja existe. Por favor insira outro.</h3>";
					} else {
						if (strlen($user_senha) < 8) {
							echo "<h3>Está senha tem menos de 8 caracteres! Por favor insira outro.</h3>";
						} else {
							// Inserindo dados na tabela USUARIOS do banco de dados
							$insert_query = mysqli_query($conn, "INSERT INTO usuarios VALUES (DEFAULT,'$user_cpf','$user_nasc','$username','$user_name','$user_email','$user_senha', '35910')");
							// Verificando se os dadso foram inseridos
							if ($insert_query) {
								echo "<script>
								alert('Cadastro bem sucedido');
								window.location.href = 'gfadmin.php';
								</script>";
								exit;
							} else {
								echo "<h3>Ops... Algo de errado aconteceu! Tente outra vez!</h3></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
							}
						}
					}
				}
			} else {
				echo "Endereço de email inválido. Por favor, incira um endereço de email válido.";
			}
		} else {
			echo "<h4>Por favor, preencha todos os campos.</h4>";
		}
	} else {
		//Defenindo o código de resposta do cabeçalho
		http_response_code(404);
		echo "<h1>Erro 404. Pagina nao encontrada!</h1></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
	}
?>
