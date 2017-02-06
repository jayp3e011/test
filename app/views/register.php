
<div class="content-wrapper background">
  <div class="container layer">
    <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>iMock</b>REGISTER</a>
      </div>
      <div id="err-msg"></div>
      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="post" data-toggle="validator" role="form" id="addUser-form">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="first name" name="first_name" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" data-error="This email address is invalid" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group has-feedback">
            <select name="colors" class="form-control" name="is_admin">
                <option value="0">Student</option>
                <option value="1">Admin</option>
            </select>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" data-minlength="6" class="form-control" placeholder="Password" name="password" id="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <div class="help-block">Minimum of 6 characters</div>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password" name="confirm_password" data-match="#password" data-match-error="Password mismatch">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the terms
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="addUser" id="addUser " class="btn btn-success btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <hr/>

        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
  </div>
  <!-- /.container -->
</div>