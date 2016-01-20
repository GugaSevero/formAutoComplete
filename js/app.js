var app = angular.module('app', ["ui.router", "ngRoute"]);

app.config(function($stateProvider){
    $stateProvider
        .state("index", {
            url:"/index/:cep",
            controller: "appController",
            templateUrl: "index.html"
        });

})