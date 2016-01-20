app.controller('appController', function ($scope, $http, $stateParams){

	$scope.pegaCep = function (data) {
	    //console.log(data);
	    $http.get("php/pegaCep.php?cep="+$stateParams.cep).success(function (data){
	    	console.log(data);
	    });
	 }


});