//const IP_SERVER = "http://192.168.1.244"; //local
//const IP_SERVER = "http://192.168.1.146"; // server
const IP_SERVER = window.location.origin;  // getting ip of server 
const CARET = '<span class="caret"></span>';
const URL_WEBSERVICE = IP_SERVER+"/obs/api/"; // url end point will be used later to retrieve data from web service just need controller and funtion name from select option
const URL_FUNCS = IP_SERVER+"/obs/admin/testFunction/TestFunction/get_funcs";
const URL_CTRLS = IP_SERVER+"/obs/admin/testFunction/TestFunction/get_ctrls";
const URL_INFO_FUNC = IP_SERVER+"/obs/admin/testFunction/TestFunction/get_info_of_function";

// delete, add, edit test function url
const URL_DELETE_FUNC = IP_SERVER+"/obs/admin/testFunction/TestFunction/delete_function";
const URL_ADD_FUNC = IP_SERVER+"/obs/admin/testFunction/TestFunction/add_function";
const URL_EDIT_FUNC = IP_SERVER+"/obs/admin/testFunction/TestFunction/edit_function";
const HEADERS ={
	'Authorization': 'Basic '+btoa('admin:1234') //js use btoa('user:password')  or php use = base64encode() YWRtaW46MTIzNA==
};

// url admin 
const URL_ADMIN = IP_SERVER+"/obs/admin/testFunction/Admin/login";

const USERNAME ="admin";
const PASSWORD ="admin";
const ACCESSKEY = "NTcxZGRmYjMyNTE4MGViYzBkMDAwMDI5MjAxNi0wNC0yNSAxNjowNDoyM09ubGluZV9CaWRkaW5nX1N5c3RlbQ==";
const HASH_PASSWORD = Crypto.MD5(PASSWORD);
const CLIENT_URL =IP_SERVER+"/TestFunctionOBS/";
const ADMIN_URL  =IP_SERVER+"/TestFunctionOBS/admin.php";
