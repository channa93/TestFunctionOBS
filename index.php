<!DOCTYPE html>
<html>
	<head>
		<title>Test Function OBS</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/client-style.css">	
		<link rel="stylesheet" type="text/css" href="css/jquery.json-view.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<!-- add meta tag to proper rendering in small device -->
		<META NAME="viewport" CONTENT="width=device-width, height=device-height, initial-scale=1, user-scalable=yes"/>
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	 -->
		<!-- <link rel="stylesheet" type="text/css" href="css/jquery.json-view.css">	 -->
		<base id="base-url" href="http://localhost/TestFunctionOBS/"></base> <!-- temporary href. See in app.js to overide it -->
	</head>
	<body ng-app="myApp" >
		<div class="container">
			<div id="header" class="row">
				<?php include 'views/header.php'; ?>
			</div>

			<div id="main">
				<!-- <a href="/TestFunction/adminPage">Admin</a> -->
				<div ng-view></div>
			</div>
			<div id="footer" class="row">
				<?php include 'views/footer.php'; ?>
			</div>
		</div>

		<script  src="constants/global.js"></script>
		<script  src="js/jquery-1.9.1.min.js"></script>
		<script  src="js/bootstrap.min.js"></script>
		<script  src="js/angular.min.js"></script>
		<script  src="js/angular-route.min.js"></script>
		<script  src="js/jquery.json-view.min.js"></script>
		<!-- <script  src="js/my-script.js"></script> -->
		<!-- <script  src="js/utils.js"></script> 
		<script  src="js/myapp.js"></script> -->

		<script  type="text/javascript" src="js/app.js"></script> 
		<script  type="text/javascript" src="controllers/utils.js"></script> 
		<script  type="text/javascript" src="controllers/client-ui.js"></script> 
		<script  type="text/javascript" src="controllers/admin-ui.js"></script> 
		 
		 
	</body>
</html>


		
	

		