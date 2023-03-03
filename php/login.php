<?php
	require 'db_connection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
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
        <div class="col s12 z-depth-6 card-panel">
          <form class="login-form" action="confirme.php"  method="post">
            <h2 class="flow-text" style="text-align: center;">LOGIN</h2>
            <a href="../index.html" style="margin-left: 35%;"><img id="logo" src="../imagens/logo1.png"/></a>
            <!-- Nome de Usuário -->
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">assignment_ind</i>
                <input name="User" placeholder="Nome de usuário" id="first_name" type="text" class="validate light-blue lighten-5" style="border-radius: 4px;">
              </div>
            </div>
            <!-- Senha -->
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input name="Senha" id="password" type="password" class="validate light-blue lighten-5" style="border-radius: 4px;"  maxlength="20">
              </div>
            </div>
            <!-- Lembra Login -->
            <!--<div class="row">          
              <div class="input-field col s12 m12 l12  login-text">
                <label for="remember-me">
                  <input type="checkbox" class="filled-in" checked="checked"  id="remember-me"/>
                  <span>Me lembre</span>
                </label>
              </div>
            </div>-->
            <!-- Botão Entrar -->
            <div class="row">
              <div class="input-field col s12">
                <input type="submit" value="Entrar" id="botao" class="btn waves-effect waves-light light-blue lighten-2 col s12">
              </div>
            </div>
            <!-- Novo Registro/Esqueceu a senha -->
            <div class="row">
              <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="novo_registro.php">Novo registro</a></p>
              </div>
              <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="lembrar_senha.php">Esqueceu a senha?</a></p>
              </div>          
            </div>
          </form>
        </div>
      </div>
  </body>
</html>
