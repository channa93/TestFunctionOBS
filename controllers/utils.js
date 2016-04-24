	
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

	// pattern for later use with $http shorthand of angularjs 
	function getObjRequest(url, method, data) {
		return {
			url: url,
			method:method,
			data: data,
			headers: HEADERS,
			processData: false,
			contentType: false
		}	
	}

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





