<!-- Modal -->
  <div class="modal fade" id="confirmDeleteModal" role="dialog">
    <div class="modal-dialog modal-sm" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-trash"></span>  Are you sure to delete?</h4>
        </div>

        <div class="modal-footer">
          <div class="text-center">
            <button type="submit" class="btn btn-primary" ng-click="removeFunction()" data-dismiss="modal">
              <span class="glyphicon  glyphicon-ok" aria-hidden="true"></span> Ok </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              <span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div> 