<?php
	require 'db_connection.php';
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
		
		$userid = $_GET['id'];
		$get_user = mysqli_query($conn,"SELECT * FROM usuarios WHERE id='$userid'");
		
		if(mysqli_num_rows($get_user) === 1){
			
			$row = mysqli_fetch_assoc($get_user);
			
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Atualizando Dados</title>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- jQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="shortcut icon" type="image/x-ico" href="../imagens/favicon.ico">
    <script type="text/javascript" src="../js/funcoes.js"></script>
    <script>
      var app = angular.module('mainModule', []);

      app.controller('mainController', function($scope, $http){ //o scope liga o js e o template
        $scope.nome = 'Valor Inicial';
        //$http.get().success();
        $scope.reset = function()
        {
          $scope.nome = '';
        }
      });
      $(document).ready(function() {
            $('input#input_text, textarea#textarea2').characterCounter();
        });
        /* label color */
        .input-field label {
            color: #000;
        }
        /* label focus color */
        .input-field input[type=text]:focus + label {
            color: #000;
        }
        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }
        /* valid color */
        .input-field input[type=text].valid {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }
        /* invalid color */
        .input-field input[type=text].invalid {
            border-bottom: 1px solid #000;
            box-shadow: 0 1px 0 0 #000;
        }
        /* icon prefix focus color */
        .input-field .prefix.active {
            color: #000;
        }
    </script>
</head>
<body ng-app="mainModule" ng-controller="mainController" class="light-blue lighten-2">
    <!-- Incerindo os dados -->
    <div id="login-page" class="row">
        <div class="col s12 card-panel">
            <!-- Atualizando os dados -->
            <div id="login-page" class="row">
                <div class="col s12">
                    <form action="" method="post">
                        <h2 class="flow-text" style="text-align: center;">Atualizando dados</h2>
                        <!-- Usuário -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Nome do Usuario</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" autocomplete="off" name="User" placeholder="Digite seu nome de usuário" value="<?php echo $row['User'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="20"><br>
                                <span class="helper-text">Incira um nome de usuário</span>
                            </div>
                        </div> 
                        <!-- CPF -->
                        <div class="row">
                            <strong style="margin-left: 15px;">CPF</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">assignment</i>
                                <input type="text" autocomplete="off" name="Cpf" placeholder="Digite o CPF" value="<?php echo $row['Cpf'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="14">
                                <span class="helper-text">EX: 123.456.789-00</span>
                            </div>
                        </div>                            
                        <!-- Data de Nascimento -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Data de Nascimento</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">date_range</i>
                                <input type="date" autocomplete="off" name="Nasc" placeholder="Digite a data de nascimento " value="<?php echo $row['Nasc'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;">
                                <span class="helper-text">Coloque a sua data de nascimento</span>
                            </div>
                        </div>
                        <!-- Nome Completo -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Nome Completo</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">assignment_ind</i>
                                <input type="text" autocomplete="off" name="Nome" placeholder="Digite o nome completo" value="<?php echo $row['Nome'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;"><br>
                                <span class="helper-text">Incira seu nome completo</span>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Email</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input type="email" autocomplete="off" name="Email" placeholder="Digite seu email" value="<?php echo $row['Email'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;"><br>
                                <span class="helper-text" data-error="Emal inválido" data-success="Email válido">Insira um email válido</span>
                            </div>
                        </div>
                        <!-- Senha -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Senha</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input type="text" autocomplete="off" name="Senha" placeholder="Digite a senha (8 caracteris no mínimo)" value="<?php echo $row['Senha'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="20">
                                <span class="helper-text">A senha deve conter entre 8 a 20 caracteres</span>
                            </div>
                        </div>
                        <!-- Cargo -->
                        <div class="row">
                            <strong style="margin-left: 15px;">Cargo</strong>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">chrome_reader_mode</i>
                                <input type="text" autocomplete="off" name="Cargo" placeholder="Digite o cago do usuário" value="<?php echo $row['Cargo'];?>" required class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="5"><br>
                                <span class="helper-text">Usuário: 35910</br>Admin: a5616</span>
                            </div>
                        </div>
                        <!-- Atualizar -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" value="Atualzar" id="botao" class="btn waves-effect waves-light light-blue lighten-2 col s12">
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
      </div>
  </body>
</html>

<?php
		}else{
			// tratando a mensagem de erro
			http_response_code(404);
			echo "<h1>Erro 404. Pagina nao encontrada!</h1></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
		}
		
	}else{
		// tratando a mensagem de erro
		http_response_code(404);
		echo "<h1>Erro 404. Pagina nao encontrada!</h1></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
	}
/*-----------------------------------------------------------------------
------------------------------------------------------------------------*/

// Atualizando dados

if(isset($_POST['User']) && isset($_POST['Cpf']) && isset($_POST['Nasc']) && isset($_POST['Nome']) && isset($_POST['Email']) && isset($_POST['Senha']) && isset($_POST['Cargo'])){
	
	// checando se o nome de usuario e o email username estao vazios
	if(!empty($_POST['User']) && !empty($_POST['Cpf']) && !empty($_POST['Nasc']) && !empty($_POST['Nome']) && !empty($_POST['Email']) && !empty($_POST['Senha']) && !empty($_POST['Cargo'])){
		
		// Ignorando os caracteres especiais
		$username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['User']));
		$user_cpf = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Cpf']));
		$user_nasc = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Nasc']));
        $user_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Nome']));
		$user_email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Email']));
		$user_senha = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Senha']));
        $user_cargo = mysqli_real_escape_string($conn, htmlspecialchars($_POST['Cargo']));
		
		// checando se o email e valido
		if (filter_var($user_email, FILTER_VALIDATE_EMAIL)){
			$user_id = $_GET['id'];
			// checando se o email ja existe
			$check_email = mysqli_query($conn, "SELECT Email FROM usuarios WHERE Email = '$user_email' AND id != '$user_id'");
			if(mysqli_num_rows($check_email) > 0){
				echo "<h3>Este endereco de email ja existe. Por favor digite outro.</h3>";
			}else{		
				if (strlen($user_senha) < 8) {
					echo "<h3>Está senha tem menos de 8 caracteres! Por favor insira outro.</h3>";
				} else {
					// atualizando os dados do usuário
					$update_query = mysqli_query($conn, "UPDATE usuarios SET User='$username',Cpf='$user_cpf',Nasc='$user_nasc',Nome='$user_name',Email='$user_email',Senha='$user_senha',Cargo='$user_cargo' WHERE id=$user_id");
					//checando se os dados foram atualizados ou não
					if($update_query){
						echo "<script>
						alert('Dados atualizados!');
						window.location.href = 'gfadmin.php';
						</script>";
						exit;
					}else{
						echo "<h3>Opps... algo deu errado!</h3></br><img src='../imagens/Bug fixing-rafiki.png' style='width: 80%;margin-top: -200px;margin-left: 10%;'>";
					}
				}
			}
		}else{
				echo "Enderoco de email invalido. Por favor digite um endereco de email valido.";
		}
	}else{
		echo "<h4>Por favor preencha todos os campo.</h4>";
	}
}

// Fim da atualização dos dados

?>
