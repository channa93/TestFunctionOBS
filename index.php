<?php include 'header.php'; ?>
		<div class="container" ng-controller="clientController">
			<!-- *************row1    Header -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<nav class="navbar navbar-inverse nav-bar-fixed-top ">
					    <h1 class="navbar-brand">Welcome to web client for OBS web service!</h1>
					</nav>					 
				</div>
			</div>
			

			<!-- *************row2   Controller, Function, Method combo list -->
			<div class="row" >
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<!--<select class="form-control" id="ctrl-name">
					    <option value="one" ng-repeat="data in controllers" class="ctrl" ng-click="selectCtrl(data.controller)">{{data.controller}}</option>
					</select> -->
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-primary dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ctrl-name" style="width:inherit;">
					    {{ctrl}} <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" >
					    <li ng-repeat="data in controllers"><a href="#" class="ctrl" ng-click="selectCtrl(data.controller)">{{data.controller}}</a></li>
					  </ul>
					</div> 
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="function-name" style="width:inherit;">
					    {{func}} <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu function-list">
					    <li><a href="#" class="function" ng-repeat="data in functions" ng-click="selectFunction(data.action)">{{data.action}}</a></li>
					    
					  </ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >
					<!-- Trigger the login modal with a button -->
					 <button type="button" class="btn btn-default" style="position: relative;float: right;" ng-click="showFormLogin()">
					 	<span class="glyphicon  glyphicon-user" aria-hidden="true"></span> login
					 </button>

					 <!-- include login modal form -->
					 <?php include 'views/login.php'; ?>
				</div>
				<!--  <div class="col-md-4 col-sm-4 col-xs-4">
					<div class="btn-group">
					  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    POST <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="#">{{method}}</a></li>
					    
					  </ul>
					</div>
				</div>	  -->
			</div>


			<!-- *************row3    URL path show -->
			<div class="row">
			   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    <div class="input-group input-group-lg">
			      <input disabled="disabled" type="text" class="form-control " id="url-box" placeholder="URL path here ...">
			      <span class="input-group-btn">
			        <button class="btn btn-warning btn-lg disabled" type="submit">{{method}}</button>
			      </span>
			    </div>
			  </div>
			</div>

			
			<!-- *************row4   param form and response dispaly block-->

			<div class="row">
				<!-- form param block -->
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">			
					<form class="form-horizontal" role="form" id="form-param">
					  <div class="form-group" ng-repeat="param in params">
					    <label class="control-label col-lg-4 col-md-4 col-sm-4 col-xs-4 name{{param.status}}" >
					    	{{param.name}}<span ng-show="(param.status=='1')" style="color: red;">*</span>:    	
					    </label> 
					    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					      <input  ng-required="(param.status=='1')" type="{{param.type}}" class="form-control type{{param.status}}" placeholder="{{param.type}}" name="{{param.name}}" >
					    </div>
					  </div>

					  <div class="text-center">
						  <button class="btn btn-success " type="submit"  id="submit" > Submit</button> 
						  <button class="btn btn-warning " type="reset" >Reset</button>
					  </div>
					</form>
				</div>
				
			</div>  <!-- end of row -->

			<!-- *************row5   Response block display-->
			<div class="row" id="block-response">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div style="display: inline-block; width:100%;">
	 					<h2 style="position:relative;float:left;" >Reponse result</h2>
	 					<button id="btn-clear-response" class="btn btn-danger" style="position: relative;float: right; margin-top: 20px;" type="button" >Clear</button>
	 				</div>
	 	
					<div id="main-block-response" >
					    <!-- <div  class="well well-lg pre-scrollable " > -->
					    <div   >
					       <pre id="response">
					       	<!-- <code id="response"> 
					       	 
					       	</code> -->
					       </pre>
					    </div>
					</div>

				</div> <!-- end of div class="col-md-6" -->
			</div>
					
<?php include 'footer.php'; ?>
