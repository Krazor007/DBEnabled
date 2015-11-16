app.controller('ProductCtrl', function ($scope,$http) {  
	$scope.text = "This is the Products page";
	$scope.products = [];
	$scope.ordr = false;
	$scope.ordr_ab = false;
	$scope.ordr_cr = false;
	$scope.ordr_ud = false;
	$scope.alpha = "pname";
	$scope.createdat = "created_at";
	$scope.updatedat = "updated_at";
	$scope.parameter = "pname";
	$scope.getItems = function()
	{
			 $http.get('http://192.168.0.101/php/getItems.php').
        		success(function(data) {
            // here the data from the api is assigned to a variable named users
            $scope.products = data;

        });
		   
	}

		$scope.setSort_ab = function(){
         
         if($scope.ordr_ab == false)
         {
         	$scope.ordr_ab = true;
         	$scope.ordr = true;
         	console.log("ab_true");
         }
         else
         {
         	$scope.ordr_ab = false;
         	$scope.ordr = false;
         	console.log("ab_false");
         }

         $scope.parameter = $scope.alpha;
    };

	$scope.setSort_cr = function(){
         
         if($scope.ordr_cr == false)
         {
         	$scope.ordr_cr = true;
         	$scope.ordr = true;
         	console.log("cr_true");
         }
         else
         {
         	$scope.ordr_cr = false;
         	$scope.ordr = false;
         	console.log("cr_false");
         }

         $scope.parameter = $scope.createdat;
    };
	$scope.setSort_ud = function(){
         
         if($scope.ordr_ud == false)
         {
         	$scope.ordr_ud = true;
         	$scope.ordr = true;
         	console.log("ud_true");
         }
         else
         {
         	$scope.ordr_ud = false;
         	$scope.ordr = false;
         	console.log("ud_false");
         }

         $scope.parameter = $scope.updatedat;
    };

	$scope.getItems(); 
});
