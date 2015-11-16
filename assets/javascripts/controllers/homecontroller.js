app.controller('HomeCtrl', function ($scope,$interval) {   
	$scope.text = "This is the Home page";
		var intervalPromise= $interval(function() {
		  	//$("#dummy").click();
		}, 10000);

		$("#dummy").on('$destroy', function() {
		   $interval.cancel(intervalPromise);
		   console.log("destroyed");
		});
});