<?php
	require 'db_connection.php';
  //Função para buscar os dadso da base de dados
	function get_all_data($conn){
		$get_data = mysqli_query($conn,"SELECT * FROM usuarios");
		if (mysqli_num_rows($get_data) > 0){
			echo '<table class="highlight" style="margin-left: 2.5%; width: 95%;">
					<tr class="blue-grey lighten-5" style="text-align: center;">
            <th>ID</th>
						<th>Nome de usuário</th>
						<th>CPF</th>
						<th>Data de Nascimento</th>
            <th>Nome completo</th>
						<th>Email</th>
						<th>Senha</th>
            <th>Cargo</th>
						<th colspan="2" style="text-align: center;">Ação</th>
					</tr>';
			while($row = mysqli_fetch_assoc($get_data)){
				echo '<tr>
        <td>'.$row['id'].'</td>
				<td>'.$row['User'].'</td>
				<td>'.$row['Cpf'].'</td>
				<td>'.$row['Nasc'].'</td>
        <td>'.$row['Nome'].'</td>
				<td>'.$row['Email'].'</td>
				<td>'.$row['Senha'].'</td>
        <td>'.$row['Cargo'].'</td>
				<td><a href="update.php?id='.$row['id'].'">Alterar</a></td>
				<td><a href="delete.php?id='.$row['id'].'">Excluir</a></td>
				</tr>';
			}
			echo '</table>';
		}else{
			echo "<h3>Nenhum registro encontrado. Por favor insira alguns registros.</h3>";
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Administração</title>
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
  </head>
  <body class="">
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <!-- MENU -->
    <header id="topmenu" class="indigo darken-4">
      <div class="navbar-fixed">
       <nav class="light-blue lighten-2">
        <div class="nav-wrapper">
          <a href="../index.html" class="brand-logo"><img id="logo" src="../imagens/logo1.png"/></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.html" class="flow-text black-text">Inicio</a></li>
          <li><a href="../galeria.html" class="flow-text black-text">Galeria</a></li>
          <li class="active"><a href="login.php" class="flow-text black-text">Login</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
    <!-- INTERFACE -->
    <div id="interface">
      <section id="inicio-1">
        <article>
          <!-- CONTEÚDO --> 
          <h1 class="flow-text red-text text-darken-1" id="bemvindo">Bem vindo</h1>

          <!-- ENVIAR ARQUIVOS 
          <?php/*
            require 'db_connection.php';
            $msg=false;
            if(isset($_FILES['arquivo']) && isset($_POST['LclFoto']) && isset($_POST['NmFoto'])){
              $LclFoto=$_POST['LclFoto'];
              $extencao=strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extenção do arquivo
              $novo_nome=md5(time()).$extencao; //Define o nome do arquivo
              $diretôrio="../galeria/";
              move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretório.$novo_nome); //Efetua o upload
              $sql_code="INSERT INTO arquivo (IdFoto,LclFoto,DtFoto,NmFoto,Fotos) VALUES(null,'$LclFoto',NUW(),'$NmFoto','$novo_nome')";
              if($mysqli->query($sql_code)){
                $msg="Arquivo envoado com sucesso!";
              }else{
                $msg="Falha ao enviar o arquivo";
              }
            }*/
          ?>
          <form action="" method="POST" enctype="multipart/form-data" class="grey lighten-5 z-depth-1" id="table" style="width: 60%; margin-left: 20%;">
            <p class="flow-text darken-4-text" style="margin-bottom: -60px;"></br>&nbsp;&nbsp;&nbsp;&nbsp;</br></p>
            <h2 class="flow-text blue-grey-text text-darken-3">ENVIAR FOTO DA OBRA</h2>-->
            <!-- Nome da Foto 
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">insert_photo</i>
                <input name="NmFoto" placeholder="Nome da foto" id="first_name" type="text" class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="20">
                <span class="helper-text">Incira o nome da foto</span>
              </div>
            </div>-->
            <!-- Local da Foto 
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">art_track</i>
                <input name="LclFoto" placeholder="Local da Foto" id="first_name" type="text" class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="20">
                <span class="helper-text">Incira o local da foto</span>
              </div>
            </div>
            <div class="input-field col" style="width: 90%; margin-left: 5%;">
              <i class="material-icons prefix">add_a_photo</i>
              <p>Arquivo: <input type="file" required name="arquivo"></p>
            </div>
            <input type="submit" value="Enviar Foto" style="margin-top: 20px;width: 20%;margin-left: 40%;" class="btn waves-effect waves-light light-blue lighten-2 col s12">
            <p class="flow-text darken-4-text" style="margin-top: -40px;"></br>&nbsp;&nbsp;&nbsp;&nbsp;</br></p>
          </form>
          -->

          <!-- TABELA USUÁRIOS -->
          <div class="grey lighten-5 z-depth-1" id="table" style="width: 110%; margin-left: -5%;">
            <p class="flow-text darken-4-text" style="margin-bottom: -60px;"></br>&nbsp;&nbsp;&nbsp;&nbsp;</br></p>
            <h2 class="flow-text blue-grey-text text-darken-3" style="text-align: center;">PESSOAS CADASTRADAS</h2>
            <?php
              // CHAMANDO A FUNÇÃO get_all_data
              get_all_data($conn);
            ?>
            <a href="novo_registro_admin.php" style="margin-top: 20px;width: 20%;margin-left: 40%;" class="btn waves-effect waves-light light-blue lighten-2 col s12">Novo Usuário</a>
            <p class="flow-text darken-4-text" style="margin-top: -40px;"></br>&nbsp;&nbsp;&nbsp;&nbsp;</br></p>
          </div>
        </article>
      </section>
    </div>
  </body>
</html>
