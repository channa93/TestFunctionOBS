$('.ctrl').click(function(){
	var ctrl="";
	var caret = ' <span class="caret"></span>';

	ctrl = $(this).text();
	console.log(ctrl);
	
	// trigger click controller, then change list functions
	controller_change(ctrl);
	$('#ctrl-name').html(ctrl+caret);
	getData();
});

function controller_change (controllerName) {
	var caret = ' <span class="caret"></span>';
	var li = document.createElement("li");
	var a = document.createElement("a");
	console.log(a);
	a.setAttribute('href','#');
	li.appendChild(a);
	console.log(li);

	$('#function-name').html(controllerName+caret);
	$('.function-list').empty(); // remove all chlidren
	$('.function-list').text(controllerName);
	$('.function-list').append(li);
}

function getData() {
	$.ajax({
		type:'GET',
		url:'http://localhost/resources /data.json',
		dataType: 'json',
		success: function(data){
			console.log(data);

		},
		error: function(error){
			console.log(error);
		}
		
	});
}



// $(function() {
// 	headerParams = {'Authorization':'Basic YWRtaW46MTIzNA=='};
// 	$.ajax({
// 		type:'GET',
// 		//crossDomain: true,
// 		// withCredentials = true,
// 		url:'http://localhost/CodeigniterREST_config/index.php/api/event',
// 		//headers: headerParams,
// 		beforeSend: function(xhr){
// 			xhr.setRequestHeader('admin', '1234');
// 		},
// 		// dataType: 'json',
// 		// contentType: 'application/json',
// 		onCreate: function(response) { // here comes the fix
// 		                var t = response.transport; 
// 		                t.setRequestHeader = t.setRequestHeader.wrap(function(original, k, v) { 
// 		                    if (/^(accept|accept-language|content-language)$/i.test(k)) 
// 		                        return original(k, v); 
// 		                    if (/^content-type$/i.test(k) && 
// 		                        /^(application\/x-www-form-urlencoded|multipart\/form-data|text\/plain)(;.+)?$/i.test(v)) 
// 		                        return original(k, v); 
// 		                    return; 
// 		                }); 
// 		            } ,
// 		success: function(data){
// 			console.log(data);

// 		},
// 		error: function(error){
// 			console.log(error);
// 		}
		
// 	});

	

// });