
//var url = "http://192.168.1.5/CodeigniterREST_config/index.php/api;
// var default_ctrl = "event";

var url = "http://192.168.1.244/obs/api/";
	// url for get all controllers GET
var url_ctrls = "http://192.168.1.244/obs/admin/testFunction/TestFunction/get_ctrls";
	// url for get functions depend on a controller POST
var url_funcs = "http://192.168.1.244/obs/admin/testFunction/TestFunction/get_funcs";
	// url for get information of a function POST
var url_info_func = "http://192.168.1.244/obs/admin/testFunction/TestFunction/get_info_of_function";

var app = angular.module('myApp', []);
var caret = ' <span class="caret"></span>';
var response="";


app.controller('myCtrl', function($scope, $http) {
	
		
	showDefaultCtrlFunc();
	// triger function when a controller is selected in combo
	$scope.selectCtrl = function(ctrl){
		$scope.ctrl = ctrl;
		console.log("select ctrl: "+ctrl);
			//list functions in combo
		$scope.listFunction(ctrl);	
	} 

	$scope.listFunction = function(ctrl){
		// request object
		var req = {
			method: 'POST',
			url: url_funcs,
			headers: {
				'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			},
			data: { ctrlName: ctrl }
		};

		// manipulate request object
		$http(req).then(function(response){
			$scope.functions = response.data.data; 
			var func = response.data.data[0].action;
			console.log($scope.functions);
			$('#function-name').html(func+caret);
		}, function(error){
			console.log(error);
		});
	} 

	$scope.selectFunction = function(funcName){
		$scope.func = funcName;
		console.log("select function: "+funcName);
		$('#function-name').html(funcName+caret);
		$('#url-box').val(url+$scope.ctrl+"/"+funcName);

		$scope.showMethodNParamForm(funcName);
	} 

	$scope.showMethodNParamForm = function(funcName) {
		console.log("show param form for function: "+funcName);
		// request object
		var req = {
			method: 'POST',
			url: url_info_func,
			headers: {
				'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			},
			data: { funcName: funcName }
		};

		// manipulate request object
		$http(req).then(function(response){
			console.log(response);
			$scope.info_func = response.data.data;
			$scope.method = response.data.data[0].method;
			$scope.params = response.data.data[0].params;
		}, function(error){
			console.log(error);
		});
	}

	// handle submit button with jQuery and request data with AngularJS
	$('#form-param').submit(function(e){
		// e.preventDefault();
		var form_data = $(this).serializeArray();
		var obj = convert_to_js_object(form_data);
		//var obj = new FormData($(this)[0]);
		console.log("Convert form param to js object: ",obj);
		$scope.url = url+$scope.ctrl+"/"+$scope.func;
		console.log("Request url: "+$scope.url);
		// request object
		var req = {
			method: 'POST',
			url: $scope.url,
			headers: {
				'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			},
			data: obj
		}
		// process request
		$http(req).then(function(response){
	    	this.response = JSON.stringify(response.data, null,3); // (data,replacer,space)
	        $('#response').html(this.response);	  
		}, function(error){
			console.log(error);
		});
	});

	

	function convert_to_js_object (data) {
		var obj = {};
	    $.each(data, function() {
	        if (obj[this.name] !== undefined) {
	            if (!obj[this.name].push) {
	                obj[this.name] = [obj[this.name]];
	            }
	            obj[this.name].push(this.value || '');
	        } else {
	            obj[this.name] = this.value || '';
	        }
	    });
	    return obj;
	}

	function showDefaultCtrlFunc() {
		// default controller and function when open index.html
		$scope.method = "Method";
		$scope.ctrl = "Profile";
		$scope.func = "login";

			/** request data to to get list of controllers */
		// create request object
		var req = {
			method: 'GET',
			url: url_ctrls,
			headers: {
				'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			}
		}
		// process request
		$http(req).then(function(response){
	    	$scope.controllers = response.data.data; 
	    	this.response = JSON.stringify(response.data, null,3); // (data,replacer,space)
	        $('#response').html(this.response);
	        $scope.listFunction($scope.ctrl);
	        $scope.selectFunction($scope.func);
	        $('#function-name').html($scope.func+caret);
		}, function(error){
			console.log(error);
		});
			
	}
	
});


