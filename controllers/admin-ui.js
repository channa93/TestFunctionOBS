app.controller('adminController', function($scope, $http, $compile) {
	
	$scope.getListFunctions = function(ctrlName) {	
		var req = getObjRequest(URL_FUNCS, 'POST', {ctrlName: ctrlName});
		// manipulate request object
		$http(req).then(function(response){
			console.log('Caller $scope.listFunction: ',response);
			if(response.data['code']==1){
				$scope.ctrl = ctrlName;
				$scope.dataList = response.data.data; 
			}else{
				alert(response.data['description']);
			}		
		}, function(error){
			console.log(error);
		});
	}

	$scope.getListControllers = function() {
		var req = getObjRequest(URL_CTRLS, 'GET', {});

		// manipulate request object
		$http(req).then(function(response){
			console.log('Caller $scope.getListControllers: ',response);
			if(response.data['code']==1){
				$scope.listControllers = response.data.data; 
			}else{
				alert(response.data['description']);
			}
			
		}, function(error){
			console.log(error);
		});
	}

	$scope.selectControler = function(ctrlName) {
		$scope.ctrl = ctrlName;
		$scope.getListFunctions(ctrlName);

	}

	// handle form submit for add new function in admin page *******
	$('#form-add-function').submit(function(e) {

		// get data from form and prepare it for object request to server to get data
		var form_data = $(this).serializeArray();
		var obj = convert_to_js_object(form_data);
		var data = _prepareDataAdminAddNewFunc(obj);
		var req = getObjRequest('http://192.168.1.244/obs/admin/testFunction/TestFunction/add_function', 'POST', data);
		
		$http(req).then(function(response){
			console.log('Response after submit form:' +response);
			$scope.getListControllers();
			alert('Successfuly add new function');
			$('#addFormModal').modal('toggle');		 // hide modal	
		},function(error){
			console.log(error);
		});
	});

	function _prepareDataAdminAddNewFunc(obj) {
		var dataPost ={
			controller: obj.controller,
			action: obj.action,
			description: obj.description,
			params: ''  // need to find
		};
		var nameParam = obj.params;
		
		  //Find param type by remove property from obj except param type
		delete obj['controller'];
		delete obj['action'];
		delete obj['description'];
		delete obj['params'];
		var typeParam = obj;

		// loop each key in typeParam object and create new params ,array of object, name and type as key 
		var i=0;
		var params=[];
		for (var property in typeParam) {
		    if (typeParam.hasOwnProperty(property)) {
		        // console.log(nameParam[i++], typeParam[property] );
		        params.push(
		        	{
		        		name: nameParam[i++],
		        		type: typeParam[property]
		        	}
		        );
		    }
		}
		dataPost['params'] = params;
		return dataPost;
	}
	$scope.addParam = function() {	
		nthParam+=1; // increment number of param. later use when add new row with radio type spcify name
		var param_input = '<tr class="param-tbl-row">'+
		        	         '<td>'+     	          
		        	         	'<input type="text" class="form-control" name="params" placeholder="parameter name ...">'+
		        	         '</td> '+   
		        	        '<td>'+       
		        	        	'<label class="radio-inline"><input type="radio" checked="checked" value="text" name="type-param'+nthParam+'">text</label>' +
		        	        	'<label class="radio-inline"><input type="radio" value="file" name="type-param'+nthParam+'">file</label>' + 	
		        	        '</td>'+
		        	        '<td>'+
		        	        	'<button type="button" class="btn btn-warning btn-remove-param" onclick="removeParam(this)" aria-label="Left Align" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>'+
		        	        '</td>' +     				       
		        	      '</tr>';
		$(param_input).appendTo('#param-tbl-body');//$('#param-tbl-body').append(param_input);
		console.log(nthParam,param_input);
	}

	$scope.removeFunction = function(id, ctrlName) {
		var req = getObjRequest(URL_DELETE_FUNC, 'POST', {id:id});
		$http(req).then(function(response){
			// refresh List Functions;
			$scope.getListFunctions(ctrlName);

		},function(error){
			console.log(error);
		});

	}

	$scope.editFunction = function(data) {
		console.log(data);debugger;
		$('#editFormModal').modal('toggle');
	}

	// show default controller and list of functions
	$scope.getListFunctions('Profile');
	$scope.getListControllers();
	
	

	

});

// js functoin to remove row of param when onlick event is fired.  onclick="removeParam(this)"
function removeParam (element) {
	$(element).closest('tr').remove ();
}