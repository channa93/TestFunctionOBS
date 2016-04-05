	<div id="editFormModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit function form</h4>
	      	</div>
	      	<div class="modal-body">
		        <form class="form-horizontal" role="form" id="form-edit-function">
		        	<input type="hidden" name="id" value="{{dataEdit.id}}"> 
		          	<div class="form-group">
		                <label class="control-label col-sm-2" for="controller">Controller</label>
		                <div class="col-sm-10">          
		                  <input type="text" class="form-control" value="{{dataEdit.controller}}" name="controller" placeholder="Enter controller name">
		                </div>
	              	</div>
	              	<div class="form-group">
		                <label class="control-label col-sm-2" for="action">Function</label>
		                <div class="col-sm-10">          
		                  <input type="text" class="form-control" value="{{dataEdit.action}}" name="action" placeholder="Enter function name">
		                </div>
	              	</div>
	              	<div class="form-group">
		                <label class="control-label col-sm-2"  for="description">Description</label>
		                <div class="col-sm-10">  
		                 <textarea class="form-control" rows="5" value="{{dataEdit.description}}" name="description" placeholder="Enter description ">{{dataEdit.description}}
		                 </textarea>        
		                  
		                </div>
	              	</div>
	              	<div class="form-group" >
	              		<!-- add param button -->
			            <div>
			                <button type="button" class="btn btn-success col-sm-3" aria-label="Left Align" ng-click="addParam('inEditFunction')">
			                	  	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			                	  	Add param
			                </button>  
			            </div><br><br>

			            <!-- param form info -->
		                <div>
		                	<table class="table table-hover table-bordered" id="param-block-tbl">
		                	    <thead>
		                	      <tr>
		                	        <th>Name</th>
		                	        <th>Type</th>
		                	        <th>Option</th>
		                	        <th>Remove</th>
		                	      </tr>
		                	    </thead>
		                	    <tbody id="param-tbl-body-edit-function">
		                	      <tr class="param-tbl-row" ng-repeat="param in dataEdit.params" >
		                	         <td>     	          
		                	         	<input type="text" class="form-control" value="{{param.name}}"  name="params" placeholder="parameter name ...">
		                	         </td>    
		                	        <td>  
		                	        	<label class="radio-inline"><input type="radio" value="text"  ng-checked="(param.type == 'text')" name="param-type{{$index}}">text</label> <!-- $index is the iteration variable -->
		                	        	<label class="radio-inline"><input type="radio" value="file"  ng-checked="(param.type == 'file')" name="param-type{{$index}}">file</label> 	
		                	        </td>
		                	        <td>
		                	        	<select name="status" class="btn btn-default">
		                	        		<option value="0" ng-selected="(param.status=='0')">optional</option>
		                	        		<option value="1" ng-selected="(param.status=='1')">required</option>
		                	        	</select>
		                	        </td>
		                	        <td>
		                	        	<button type="button" class="btn btn-danger btn-remove-param" onclick="removeParam(this)" aria-label="Left Align" ><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
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