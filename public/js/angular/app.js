var app = angular.module("app", [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

var C_SERVER = 'http://localhost/colegio/public';


