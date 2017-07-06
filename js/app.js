//在app.js中，主要用于创建应用，配置路由相关事项
//ionic中使用的是ui-router路由服务
var app = angular.module('app',['ionic','ui.router']);
//配置路由，使用ui-router
app.config(function($stateProvider,$urlRouterProvider){
	//通过url..provider配置地址不在路由表范围内时的跳转页面
	$urlRouterProvider.otherwise('/home');
	//配置路由表
	$stateProvider.state(
			'home',{//路由名称，大括号内是该路由表的配置信息
				url:'/home',
				templateUrl:"template/home.html",
				controller:"homeController"
			}
		)
	.state('detail',{
		// 此处跳转到详情页，需要通过路由进行传值,把对象的每个信息单独穿过
		url:'/detail/:name/:city/:country/:age',
		templateUrl:'template/detail.html',
		controller:'detailController'
	})
})