$(document).ready(function() {
	function http_request_ajax(obj) {
		$.ajax( {
			  url: obj.url,
			  method: obj.method,
			  headers: {
			  	'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			  },
			  data: data,
			  processData: false,
			  contentType: false,
			  success: function (response) {	  	
			  	return response;
			  },
			  error: function (error) {
			  	console.log(error);
			  	alert(error);
			  	return error;
			  }
		});
		e.preventDefault();
	}

	function http_request_angular(obj){

		// create object request
		var request ={
			method: obj.method,
			url: obj.url,
			headers: {
				'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
			}
		}

		//process request
		$http({request}).then(function(response) {
			return response;
		}, function(error){
			console.log(error);
			alert(error);
			return error;
		});
	}
});

