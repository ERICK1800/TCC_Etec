<?php
	require 'db_connection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
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
          <!-- CONTINUAÇÃO DO CONTEÚDO -->
          <p class="flow-text darken-4-text"></br>&nbsp;&nbsp;&nbsp;&nbsp;</br></p>
        <!-- RODAPÉ -->
        <footer class="page-footer light-blue lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 black-text">
                © Agosto/2021 Texto Copyright
                <h5 class="black-text" style="margin-right: 45%">Fale conosco</h5>
                <p class="black-text" id="rodape">Fone: <a class="black-text" href="tel:01140251939">(11) 4025-1939</a><br>Celular-1: <a class="black-text" href="tel:011999033557">(11) 99903-3557</a><br>Celular-2: <a class="black-text" href="tel:011947640541">(11) 94764-0541</a><br>Email: <a class="black-text" href="mailto:adm.gfimp@gmail.com?Subject=Fale%20Conosco">adm.gfimp@gmail.com</a><br>Endereço: <a class="black-text" href="https://goo.gl/maps/3nCdEyahVUFr4GMj8">R. Paulo Eduardo Xavier de Toledo, 553 - B° São Luiz<br>CEP: 13.304-240</a></p>
              </div>
              <div class="col l4 offset-l2 s12"><br>
                <!--<h5 class="black-text">Desenvolvedores</h5>-->
                <ul>
                  <!--<p class="flow-text black-text" id="rodape">Erick Lima&reg;<br>Lucas Zain&reg;<br>Nathan Martins&reg;<br>Paulo Cesar&reg;<br>Raphael Ginna&reg;</p>-->
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.2233659827984!2d-47.28114298502769!3d-23.2713321848276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf455895be0001%3A0xe2ac47b1aa21b5ad!2sGF%20Impermeabiliza%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1628099111292!5m2!1spt-BR!2sbr" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container black-text">
              <a class="black-text left" href="https://instagram.com/gf_impermeabilizacao?utm_medium=copy_link"><img src="../imagens/icno_instagram.png" width="24px"></a>
              <a class="black-text" href="https://instagram.com/gf_impermeabilizacao?utm_medium=copy_link">&nbsp;Nossa página no Instagram</a>
              <a class="black-text right" href="https://www.facebook.com/profile.php?id=100004868596033">&nbsp;Nossa página no Facebook</a>
              <a class="black-text right" href="https://www.facebook.com/profile.php?id=100004868596033"><img src="../imagens/icon_facebook.png" width="24px"></a>
            </div>
          </div>
        </footer>
        </article>
      </section>
    </div>
  </body>
</html>
