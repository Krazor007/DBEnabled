app.controller('ProductCtrl', function ($scope,$http) {  
	$scope.text = "This is the Products page";
	$scope.products = [];
	$scope.getItems = function()
	{
			 $http.get('http://192.168.0.101/php/getItems.php').
        		success(function(data) {
            // here the data from the api is assigned to a variable named users
            $scope.products = data;

        });
		   
	}

	$scope.getItems(); 
});
