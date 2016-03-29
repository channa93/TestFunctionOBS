<?php include 'header.php'; ?>

		<div class="container" ng-controller="adminController">
			<!-- *************row1    Title -->
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<nav class="navbar navbar-dark nav-bar-fixed-top bg-primary">
					    <h1 class="navbar-brand">Welcome to admin page for OBS Web-Service test function page!</h1>
					</nav>	
				</div>
			</div>

			<!-- *************row2    Controller combo list with Add button-->
			<div class="row" >
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-default dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ctrl-name" style="width:inherit;">
					    {{ctrl}} <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" >
					    <li ng-repeat="data in listControllers"><a href="#" class="ctrl" ng-click="selectControler(data.controller)">{{data.controller}}</a></li>
					  </ul>
					</div> 
				</div>

				<!-- add new function button and modal form pop up -->
				<div class="col-md-4 col-sm-4 col-xs-4" >
					<div class="btn-group" style="width:75%; ">
					  <button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target="#addFormModal">
						  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						  	New Function
						</button>
					</div> 

					<!-- Include Modal form pop up here -->
					<?php include 'views/form-add-function.php'; ?>
					
				</div>
			</div>  <!-- end of row2 -->

			<!-- *************row3     Function, table list -->
			<div class="row" >
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- <div class="table-responsive" > -->
						<table class="table table-hover table-bordered">
						    <thead>
						      <tr>
						        <th>Function</th>
						        <th>Parameter</th>
						        <th>Description</th>
						        <th>Options</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr ng-repeat="data in dataList">
						        
						        <td> <input type="hidden" name="id" value="{{data.id}}"> {{data.action}}</td>
						        <td >
							        <table>
							        	<tr ng-repeat="param in data.params">
							        		<td>{{param.name}}</td>
							        	</tr>
							        </table>
						        </td>
						        <td>
						        	{{data.description}}
						        </td>
						        <td>
						        	<button type="button" class="btn btn-success" aria-label="Left Align" ng-click="editFunction(data)">
						        	  <span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span> Edit
						        	</button>
						        	<button type="button" class="btn btn-warning" aria-label="Left Align" ng-click="removeFunction(data.id, data.controller)"> 
						        	  <span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Del.
						        	</button>
						        </td>
						        
						        
						      </tr>

						    </tbody>
						  </table>

						  <!-- 	Modal form pop up for edit function is here -->
						  <?php include 'views/form-edit-function.php'; ?>

				</div>	
			</div> <!-- end of row -->
		</div> <!-- end of container	 -->

<?php include 'footer.php'; ?>
