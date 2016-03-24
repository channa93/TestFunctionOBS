	var headers ={
		'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
	};

	function http_request_ajax(obj, callbackSuccess , callbackError) {
		
		$.ajax( {
			  url: obj.url,
			  method: obj.method,
			  data: obj.data,
			  headers: headers,
			  processData: false,
			  contentType: false,
			  success: callbackSuccess,
			  error: callbackError
		});
		
	}

	// patter for later use with $http shorthand of angularjs 
	function getObjRequest(url, method, data) {

		return {
			url: url,
			method:method,
			data: data,
			headers: headers,
			processData: false,
			contentType: false
		}
		
	}





