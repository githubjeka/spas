var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'myApp.directives']);

app.config(['$locationProvider', '$routeProvider', function ($locationProvider, $routeProvider) {

    $routeProvider

        .when('/', {
            templateUrl: 'main.html'
        })

        .when('/individual', {
            templateUrl: 'content.html',
            controller: 'IndividualCtrl'
        })

        .when('/404', {
            templateUrl: '404.html'
        })

        .otherwise({ redirectTo: '/404' })
    ;

    $locationProvider.html5Mode(true).hashPrefix('!');

}]);

app.value('version', '0.1');