angular.module('GitMngr', ['ngRoute'])
        .config(function ($routeProvider) {
            $routeProvider
                    .when(
                            '/'
                            , {templateUrl: 'home.php'
                                , controller: 'ControladorTareas'
                            })
                    .when(
                            '/repositorios'
                            , {templateUrl: 'repos.php'
                                , controller: 'cRepos'})

                    .when(
                            '/configuracion'
                            , {templateUrl: 'config.php'
                                , controller: 'cConfig'})
                    .otherwise({redirectTo: '/'});
        })
        .controller('ControllerHeader', function ($scope) {
            $scope.companyDomain = 'X';
        })
        .factory('Repos', function () {

        })
        .factory('Keys', function () {

        })
        .controller('cRepos', function ($scope, Repos) {

        })
        .controller('cConfig', function ($scope, Keys) {

        });