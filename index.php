<?php include 'header.php'; ?>
		<div class="container" ng-controller="clientController">
			<!-- *************row1    Header -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<nav class="navbar navbar-dark nav-bar-fixed-top bg-primary">
					    <h1 class="navbar-brand">Welcome to Web-Service test function page!</h1>
					</nav>	
				</div>
			</div>
			
			<!-- *************row2   Controller, Function, Method combo list -->
			<div class="row" >
				<div class="col-md-6 col-sm-6 col-xs-6">
					<!--<select class="form-control" id="ctrl-name">
					    <option value="one" ng-repeat="data in controllers" class="ctrl" ng-click="selectCtrl(data.controller)">{{data.controller}}</option>
					</select> -->
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-default dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ctrl-name" style="width:inherit;">
					    {{ctrl}} <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" >
					    <li ng-repeat="data in controllers"><a href="#" class="ctrl" ng-click="selectCtrl(data.controller)">{{data.controller}}</a></li>
					  </ul>
					</div> 
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6" >
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="function-name" style="width:inherit;">
					    {{func}} <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu function-list">
					    <li><a href="#" class="function" ng-repeat="data in functions" ng-click="selectFunction(data.action)">{{data.action}}</a></li>
					    
					  </ul>
					</div>
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
			   <div class="col-lg-12">
			    <div class="input-group input-group-lg">
			      <input type="text" class="form-control " id="url-box" placeholder="URL path here ...">
			      <span class="input-group-btn">
			        <button class="btn btn-warning btn-lg" type="submit">{{method}}</button>
			      </span>
			    </div>
			  </div>
			</div>

			
			<!-- *************row4   param form and response dispaly block-->

			<div class="row">
				<!-- form param block -->
				<div class="col-md-6 col-sm-6 col-xs-6">			
					<form class="form-horizontal" role="form" id="form-param">
					  <div class="form-group" ng-repeat="param in params">
					    <label class="control-label col-md-4 col-sm-4 col-xs-4 name{{param.status}}" >{{param.name}}:</label>
					    <div class="col-md-8 col-sm-8 col-xs-8">
					      <input type="{{param.type}}" class="form-control type{{param.status}}" placeholder="{{param.type}}" name="{{param.name}}" >
					    </div>
					  </div>

					  <button class="btn btn-success " type="submit" style="float: left; margin-right: 10px"  id="submit" >Submit</button> 
					  <button class="btn btn-warning " type="reset" >Reset</button>
					</form>
				</div>
				<!-- response block-->
				<div class="col-md-6 col-sm-6 col-xs-6 ">
	<!-- 				<div class="title_result" style="position: relative;float: right; width: 50%; height: auto;">
	 -->				<div class="title_result" style="position: relative;float: right; width: 100%; height:auto;"> Reponse</div>
						<div id="main-block-response">
						    <div id="response" class="well well-sm pre-scrollable ">
						       <!-- <pre>
						       	<code id="response"> 
						       	 
						       	</code>
						       </pre> -->
						    </div>
						</div>

				</div> <!-- end of div class="col-md-6" -->
			</div>  <!-- end of row -->
					
<?php include 'footer.php'; ?>
