// 需要接收路由传递进来的参数，所以需要注入$stateParams服务
app.controller('detailController',function($scope,$stateParams){
	
	$scope.obj = {
		Name:$stateParams.name,
		City:$stateParams.city,
		Country:$stateParams.country,
		Age:$stateParams.age
	}
	// 定义返回事件，返回到主页
	$scope.goBack = function(){
		//通过调用浏览器的返回事件，实现返回到主页的效果
		window.history.back();
	}
})