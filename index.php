<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  ng-app="GitMngr">
    <head ng-controller="ControllerHeader">
        <title>GIT@{{companyDomain}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.angularjs.org/1.3.5/angular-route.min.js"></script>
        <script src="//code.angularjs.org/1.3.5/i18n/angular-locale_es-mx.js"></script>

        <script src="js/index.js"></script>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body ng-app="Rutas">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Desplegar navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/">
                    <i class="glyphicon glyphicon-home"></i>
                    Home</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#/repositorios/">
                            <i class="glyphicon glyphicon-hdd"></i>
                            Repositorios
                        </a>
                    </li>
                    <li>
                        <a href="#/configuracion/">
                            <i class="glyphicon glyphicon-cog"></i>
                            Configuraci&oacute;n
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="container">

            <div ng-view></div>

        </div>
    </body>
</html>
