<?php include_once __DIR__ . '/../../config/querys.php'; ?>
<!DOCTYPE HTML>
<html ng-app="ibiblioteca">
    <head>
        <meta charset="UTF-8">
        <title>iBiblioteca</title>
        <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/bower_components/angular/angular.min.js"></script>
        <script src="/assets/bower_components/angular/angular-route.min.js"></script>
        <script src="/assets/js/angular/ibiblioteca.js"></script>
        <script src="/assets/js/angular/services/editora.js"></script>
        <script src="/assets/js/angular/controllers/editora.js"></script>


    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-dark bg-inverse">
                  <ul class="nav navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Listar Livros <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cad_autor.php">Autor</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cad_editora.php">Editora</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cad_livro.php">Cadastrar Livro</a>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12" ng-view>

                </div>
            </div>
        </div>
    </body>
</html>
