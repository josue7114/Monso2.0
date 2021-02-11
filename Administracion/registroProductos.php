<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro de productos -MONSO-</title>
        <link href="../resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="">
        <header class="col-md-12">
            <nav class="nav navbar navbar-fixed-top">
                <a class="navbar-brand" href="../index.php"><img src="../resources/img/Monso.svg" class="logo-monso"/></a>
                <div>
                    <ul class="nav">
                        <li class="listnav"><a class="linknav" href="../cosmetica/InicioCosmetica.php">Inicio</a></li>
                        <li class="listnav"><a class="linknav" href="../cosmetica/Productos.php">Productos</a></li>
                        <li class="listnav"><a class="linknav" href="../Contacto.php">Contacto</a></li>
                        <li class="listnav"><a class="linknav" href="#">Acerca de</a></li>
                        <li class="listnav"><a class="linknav" href="#">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            <h1 class="text-center">Registro de productos</h1>
            <div class="forms">
                <form class="col-md-6">
                    <div class="form-group">
                        <label for="idProducto" class="control-label">Código:</label>
                        <input id="idProducto" type="text" class="form-control"/>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input id="nombre" type="text" class="form-control"/>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="division">División:</label>
                        <select id="division" class="form-control">
                            <option>Seleccione una opción</option>
                            <option>Cosmética natural</option>
                            <option>Conserva natural</option>
                        </select>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <select id="categoria" disabled="true" class="form-control">
                            <option>Seleccione una opción</option>

                        </select>
                    </div>
                    </br>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" class="form-control"></textarea>
                    </div>
                    </br>
                    <div>
                        <button type="submit" class="btn btn-outline-success btn-lg">Enviar</button> 
                    </div>
                </form>
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
