<!-- Modal -->
  <div class="modal fade" id="loginFormModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login form</h4>
        </div>
        <div class="modal-body">
          <form role="form" id="form-login">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>

            <!-- <div class="text-center">
              <button type="submit" class="btn btn-default btn-success "><span class="glyphicon glyphicon-log-in"></span> Login</button>
              <button data-dismiss="modal" class="btn btn-default btn-danger "><span class="glyphicon glyphicon-delete"></span> Cancel</button>
            </div> -->
              <div class="modal-footer">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" >
                    <span class="glyphicon  glyphicon-log-in" aria-hidden="true"></span> Login </button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class="glyphicon  glyphicon-remove" aria-hidden="true"></span> Cancel</button>
                </div>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div> 