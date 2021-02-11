<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de sesión -MONSO-</title>
        <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="resources/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="body">
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Inicio de sesión</h1>
                </div>
                <div>
                    <img class="logo-Top-img" style="margin-left: 30%" src="resources/img/Monso.svg"/>
                    <br>
                </div>
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="Usuario" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="Contraseña" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>

                    <a class="btn btn-primary btn-large btn-block" href="#">Ingresar</a>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div>
                <p class="foot">Sitio web desarrollado por <a href="https://www.linkedin.com/in/josu%C3%A9-cordero-5b9747163/" target="_blank">Cordero</a></p>
            </div>
        </footer>
        <script src="../resources/JQuery-3.5.1.js" type="text/javascript"></script>
        <script src="../resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../resources/actions.js" type="text/javascript"></script>
    </body>
</html>

