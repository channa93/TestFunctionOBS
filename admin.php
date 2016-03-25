<?php include 'header.php'; ?>

		<!-- *************row2    Controller combo list with Add button-->
		<div class="row" >
			<div class="col-md-4 col-sm-4 col-xs-4">
				<div class="btn-group" style="width:75%; ">
				  <button type="button" class="btn btn-default dropdown-toggle text-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ctrl-name" style="width:inherit;">
				    {{ctrl}} <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" >
				    <li ng-repeat="data in controllers"><a href="#" class="ctrl" ng-click="selectCtrl(data.controller)">{{data.controller}}</a></li>
				  </ul>
				</div> 
			</div>

			<!-- add new function button and modal form pop up -->
			<div class="col-md-4 col-sm-4 col-xs-4" >
				<div class="btn-group" style="width:75%; ">
				  <button type="button" class="btn btn-success" aria-label="Left Align" data-toggle="modal" data-target="#myModal">
					  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					  	New Function
					</button>
				</div> 

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      	<div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Add new function form</h4>
				      	</div>
				      	<div class="modal-body">
					        <form class="form-horizontal" role="form" id="form-add-function">
					          	<div class="form-group">
					                <label class="control-label col-sm-2" for="controller">Controller</label>
					                <div class="col-sm-10">          
					                  <input type="text" class="form-control" name="controller" placeholder="Enter controller name">
					                </div>
				              	</div>
				              	<div class="form-group">
					                <label class="control-label col-sm-2" for="action">Function</label>
					                <div class="col-sm-10">          
					                  <input type="text" class="form-control" name="action" placeholder="Enter function name">
					                </div>
				              	</div>
				              	<div class="form-group">
					                <label class="control-label col-sm-2" for="description">Description</label>
					                <div class="col-sm-10">  
					                 <textarea class="form-control" rows="5" name="description" placeholder="Enter description "></textarea>        
					                  
					                </div>
				              	</div>
				              	<div class="form-group" >
						            <div>
						                <button type="button" class="btn btn-success col-sm-3" aria-label="Left Align" ng-click="addParam()">
						                	  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						                	  	Add param
						                </button>  
						            </div><br><br>
					                <div>
					                	<table class="table table-hover table-bordered" id="param-block-tbl">
					                	    <thead>
					                	      <tr>
					                	        <th>Name</th>
					                	        <th>Type</th>
					                	        <th>Remove</th>
					                	      </tr>
					                	    </thead>
					                	    <tbody id="param-tbl-body">
					                	      <tr class="param-tbl-row">
					                	         <td>     	          
					                	         	<input type="text" class="form-control" name="params" placeholder="parameter name ...">
					                	         </td>    
					                	        <td>       
					                	        	<label class="radio-inline"><input type="radio" value="text" checked="checked" name="type-param1">text</label>
					                	        	<label class="radio-inline"><input type="radio" value="file" name="type-param1">file</label> 	
					                	        </td>
					                	        <td>
					                	        	<button type="button" class="btn btn-warning btn-remove-param" onclick="removeParam(this)" aria-label="Left Align" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
					                	        </td>     				       
					                	      </tr>

					                	    </tbody>
					                	  </table>
						            </div> 
				              	</div>
			              		<div class="modal-footer">
				              	  	<button type="submit" class="btn btn-default" >
				              	  		<span class="glyphicon  glyphicon-ok" aria-hidden="true"></span> Ok </button>
				              	  	<button type="button" class="btn btn-default" data-dismiss="modal">
				              	  		<span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Cancel</button>
			              		</div>
					        </form>
				     	</div> <!-- end of modal-body   -->    	
				    </div>  <!-- end of Modal content -->

				  </div>
				</div>
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
					        <th>Tools</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr ng-repeat="data in functions">
					        <td>{{data.action}}</td>
					        <td >
						        <table>
						        	<tr ng-repeat="param in data.params">
						        		<td>{{param.name}}</td>
						        	</tr>
						        </table>
					        </td>
					        <td>
					        	Description
					        </td>
					        <td>
					        	<button type="button" class="btn btn-success" aria-label="Left Align" >
					        	  <span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span> Edit
					        	</button>
					        	<button type="button" class="btn btn-warning" aria-label="Left Align" > 
					        	  <span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Del.
					        	</button>
					        </td>
					        
					        
					      </tr>

					    </tbody>
					  </table>
				<!-- TODO: this is a todo</div>	 -->
				<!-- FUTURE: this is a future todo</div>	 -->
			</div>	
		</div>	

<?php include 'footer.php'; ?>
