var response="";
	// used to suffix the param type for radio button
var nthParam=1;
	
app.controller('clientController', function($scope, $http, $compile) {
	
	showDefaultCtrlFunc();
	// triger function when a controller is selected in combo
	$scope.selectCtrl = function(ctrl){
		$scope.ctrl = ctrl;
		console.log("select ctrl: "+ctrl);
			//list functions in combo
		$scope.listFunction(ctrl);	
	} 

	$scope.listFunction = function(ctrl){
		// create request object from pattern in utils.js
		var req = getObjRequest(URL_FUNCS, 'POST', {ctrlName: ctrl}); // getObjRequest(url, method, data)	

		// manipulate request object
		$http(req).then(function(response){
			console.log('Caller $scope.listFunction: ',response);
			if(response.data['code']==1){
				$scope.functions = response.data.data;
				$scope.selectFunction(response.data.data[0].action);  // after list select the first function by default
			}else{
				alert(response.data['description']);
			}
			
		}, function(error){
			console.log(error);
		});
	} 

	$scope.selectFunction = function(funcName){
		console.log("select function: "+funcName);
		$scope.func = funcName;   
		$scope.url = URL_WEBSERVICE+$scope.ctrl+"/"+$scope.func;
		$('#function-name').html(funcName+CARET);
		$('#url-box').val($scope.url);

		$scope.showMethodNParamForm(funcName);
	} 

	$scope.showMethodNParamForm = function(funcName) {
		console.log("show param form for function: "+funcName);
		
			/** request data to to get list of controllers using Angular*/
		// create request object from pattern in utils.js
		var req = getObjRequest(URL_INFO_FUNC, 'POST', {funcName: funcName}); // getObjRequest(url, method, data)
		
		// process request object
		$http(req).then(function(response){
			if(response.data['code']==1){
				console.log(response);
				$scope.info_func = response.data.data;
				$scope.method = response.data.data[0].method;
				$scope.params = response.data.data[0].params;
			}else{
				alert(response.data['description']);
			}
			
		}, function(error){
			console.log(error);
		});
	}

	// handle submit button with jQuery and request data with AngularJS (submit form to get data back from server)
	$('#form-param').submit(function(e){
		 // Using ajax to post data to server cus it works well with file upload
		$.ajax( {
			  url: $scope.url,
			  method: $scope.method,
			  headers: {
			  	'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			  },
			  data: new FormData( this ),
			  processData: false,
			  contentType: false,
			  success: function (response) {
			   	console.log(response);	
			  	$('#response').jsonView(JSON.stringify(response, null,3));  //output response  	
			  	if(response['code']==0)	alert(response.message['description']);	  	
			  },
			  error: function (error) {
			  	this.response = JSON.stringify(response, null,3);
			  	$('#response').html(this.response);
			  	console.log(error);
			  }
		} );
		e.preventDefault();
			// 	scroll to block response div with animation
		$("html, body").animate({ scrollTop: $("#block-response").offset().top }, 1000);
		
	});


	function showDefaultCtrlFunc() {
		// default controller and function when open index.html
		$scope.method = "Method";
		$scope.ctrl = "Profile";  // current selected controller scope variable
		$scope.func = "login";    // current selected function scope variable

			/** request data to to get list of controllers using Angular*/
		// create object request pattern
		var req = getObjRequest(URL_CTRLS, 'GET');
		
		// process request
		$http(req).then(function(response){	
			  // convert to string and display to repsone block
	        // $('#response').html(JSON.stringify(response, null,3)); // JSON.stringify(data,replacer,space)
	        $('#response').jsonView(JSON.stringify(response.data, null,3)); // JSON.stringify(data,replacer,space)
			$scope.controllers = response.data.data; 
	        $scope.listFunction($scope.ctrl);
			if(response.data['code']==0)  alert(response.data.message['description']);

		}, function(error){
			console.log(error);
		});		
	}

	$scope.showFormLogin = function() {
		$('#loginFormModal').modal({backdrop: "static"});
	}

	$('#form-login').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
		var obj = convert_to_js_object(data);

		if(obj.username == USERNAME && obj.password == PASSWORD){
			console.log('username and password is correct');
			window.location.href = ADMIN_URL;
			// debugger;
			// window.history.pushState("object or string", "Title", ADMIN_URL);
		}else{
			$scope.error_message = 'username and password is not correct';
			alert('username and password is not correct');
		}
		
	});

	$('#btn-clear-response').click(function(){
		console.log("click on clear response");
		$('#response').html('');
	});



	// $('#response').jsonView(JSON.stringify(
	//     {
 //    	    "code": 1,
 //    	    "data": {
 //    	        "userName": "Chea Dararaksmey",
 //    	        "displayName": "Titi tom",
 //    	        "firstName": "Titi",
 //    	        "lastName": "tom",
 //    	        "accessKey": "NTZkZWVmYzk3ZjhiOWFiNjA4OGI0NTY3MjAxNi0wMy0wOCAyMjowMzoxMyBQTU9ubGluZV9CaWRkaW5nX1N5c3RlbQ==",
 //    	        "sex": "",
 //    	        "avatar": "http://192.168.1.146/obs/upload/img/profiles/821628821457616064Screenshot_10.png",
 //    	        "emails": [],
 //    	        "phones": [],
 //    	        "contactInfo": {
 //    	            "address": "toul kork",
 //    	            "website": "www.mysite.com",
 //    	            "companyName": null
 //    	        },
 //    	        "userId": "56deefc97f8b9ab6088b4567"
 //    	    },
 //    	    "message": {
 //    	        "code": 1,
 //    	        "description": "success"
 //    	    }
 //    	}
	// ));
	
});








