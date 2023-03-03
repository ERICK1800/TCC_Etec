<?php
	require 'db_connection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Novo registro</title>
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
        <div class="col s12 z-depth-6 card-panel">
          <form class="login-form" action="insertUser.php"  method="post">
            <h2 class="flow-text" style="text-align: center;">NOVO REGISTRO</h2>
            <!-- CPF -->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment</i>
                    <input name="Cpf" placeholder="CPF" id="input_text" type="text"  class="validate light-blue lighten-5" style="border-radius: 4px;"  maxlength="14">
                    <span class="helper-text">EX: 123.456.789-00</span>
                </div>
            </div>
            <!-- Data -->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input name="Nasc" id="input_text" type="date"  class="validate light-blue lighten-5" style="border-radius: 4px;">
                    <span class="helper-text">Coloque a sua data de nascimento</span>
                </div>
            </div>
            <!-- Nome de Usuário -->
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input name="User" placeholder="Nome de usuário" id="first_name" type="text" class="validate light-blue lighten-5" style="border-radius: 4px;" maxlength="20">
                <span class="helper-text">Incira um nome de usuário</span>
              </div>
            </div>
            <!-- Nome Completo -->
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">assignment_ind</i>
                <input name="Nome" placeholder="Nome completo" id="first_name" type="text" class="validate light-blue lighten-5" style="border-radius: 4px;">
                <span class="helper-text">Incira seu nome completo</span>
              </div>
            </div>
            <!-- Email -->
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input name="Email" placeholder="Email" id="email" type="email" class="validate light-blue lighten-5" style="border-radius: 4px;">
                    <span class="helper-text" data-error="Emal inválido" data-success="Email válido">Insira um email válido</span>
                </div>
            </div>
            <!-- Senha -->
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input name="Senha" id="password" type="password" class="validate light-blue lighten-5" style="border-radius: 4px;"  maxlength="20">
                <span class="helper-text">A senha deve conter entre 8 a 20 caracteres</span>
              </div>
            </div>
            <!-- Registrar-se -->
            <div class="row">
                <div class="input-field col s12">
                    <input type="submit" value="Resgistrar-se" id="botao" class="btn waves-effect waves-light light-blue lighten-2 col s12">
                </div>
            </div>
            <!-- Login -->
            <div class="row">
              <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="login.php">Login</a></p>
              </div>
              <!--<div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="#">Esqueceu a senha?</a></p>
              </div>-->         
            </div>
          </form>
        </div>
      </div>
  </body>
</html>
