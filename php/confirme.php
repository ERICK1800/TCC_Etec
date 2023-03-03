<?php 
	require 'db_connection.php';
	if(isset($_POST['User']) && isset($_POST['Senha'])) {
		// Verifica se os campos de username e senha estão vazios
		if(!empty($_POST['User']) && !empty($_POST['Senha'])) {
			// Ignorando ("escapando") caracteres especiais
			$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['User']));
			$senha = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Senha']));
				// Verifica se o nome já existe
				$check_name = mysqli_query($conn, "SELECT 'User' FROM usuarios WHERE User = '$username'");
				if (mysqli_num_rows($check_name) > 0) {
					// Verifica se a senha está correta
					$check_senha = mysqli_query($conn, "SELECT 'Senha' FROM usuarios WHERE Senha = '$senha'");
					if (mysqli_num_rows($check_senha) > 0) {
						// Verificar o cargo
						$get_user = mysqli_query($conn,"SELECT * FROM usuarios WHERE User='$username'");
						if(mysqli_num_rows($get_user) === 1){
							$row = mysqli_fetch_assoc($get_user);
							if ($row['Cargo'] == 'a5616'){				
								echo "<script>
								alert('Bem vindo');
								window.location.href = 'gfadmin.php';
								</script>";
								exit;
							} else {
								/*echo "<script>
								alert('Bem vindo');
								window.location.href = 'gfhome.php';
								</script>";*/
								echo "<script>
								alert('Infelizmente você não tem permição para entrar agora!');
								window.location.href = '../index.html';
								</script>";
								exit;
							}
						} else {
							echo "<script>
						alert('Ops... Parece que você não tem um cargo!');
						window.location.href = 'login.php';
						</script>";
						exit;
						}
					} else {
						echo "<script>
						alert('Ops... Senha ou usuário incorreto!');
						window.location.href = 'login.php';
						</script>";
						exit;
					}
				} else {
					echo "<script>
					alert('Ops... Nome de usuário não existe!');
					window.location.href = 'login.php';
					</script>";
					exit;
				}
		} else {
			echo "<script>
			alert('Por favor, preencha todos os campos.');
			window.location.href = 'login.php';
			</script>";
			exit;
		}
	} else {
		//Defenindo o código de resposta do cabeçalho
		http_response_code(404);
		echo "<h1>Erro 404. Pagina nao encontrada!</h1></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
	}
?>
