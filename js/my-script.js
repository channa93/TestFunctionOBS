// var caret = ' <span class="caret"></span>';
// $('.ctrl').click(function(){
// 	var ctrl="";
	
// 	ctrl = $(this).text();
// 	console.log(ctrl);
	
// 	// trigger click controller, then change list functions
// 	controller_change(ctrl);
// 	$('#ctrl-name').html(ctrl+caret);
// });

// $('.function').click(function(){
// 	var func="";
// 	func = $(this).text();
// 	console.log(func);
// 	function_change(func);
// 	$('#function-name').html(func+caret);

// });

// function controller_change (controllerName) {
// 	var li = document.createElement("li");
// 	var a = document.createElement("a");
// 	console.log(a);
// 	a.setAttribute('href','#');
// 	a.setAttribute('class','function');
// 	li.appendChild(a);
// 	console.log(li);

// 	$('#function-name').html(controllerName+caret);
// 	//$('.function-list').empty(); // remove all chlidren
// 	//$('.function-list').text(controllerName);
// 	$('.function-list').append("<li><a href='#'>" + controllerName + "</a></li>");
// }

// function function_change(functionName){
// 	console.log(functionName);

// }


/*$(function(){
	$.ajax({
	    beforeSend: function (xhr) {
	        xhr.setRequestHeader('Authorization', 'Basic ' + btoa('admin:1234'));//btoa('user:pass'))
	    },
	    url: "http://192.168.1.244/obs/api/profile",
	    type: 'get',
	    //data: {socialId:response.id, socialType:'1', displayName:response.name},
	    dataType: "json",
	    success: function (data) {
	    	console.log(data);
	    },
	    error: function (error) {
	    	console.log(error);
	    }
	});
});*/

