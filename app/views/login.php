<?php
  session_start();
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once ('../includes/class.user');
  require_once('../includes/formvalidator.php');
  require_once('../includes/validationrule.php');
  $user = new User();

  if (isset($_REQUEST['submit'])) { 
    $validator->addRule('email', 'Email is a required field', 'required');
    $validator->addRule('email', 'Invalid Email', 'email');
    $validator->addRule('password', 'Password must be longer than 6 characters', 'minlength', 6);
    $validator->addEntries($_POST);
    $validator->validate();
    $entries = $validator->getEntries();
    foreach ($entries as $key => $value) {
        ${$key} = $value;
    }
    if ($validator->foundErrors()) {
        $errors = $validator->getErrors();
    }
    extract($_REQUEST);   
      $login = $user->check_login($email, $password);
      if ($login) {
          // Registration Success
         header("location:home.php");
      } else {
          // Registration Failed
          echo 'Wrong username or password';
      }
  }
?>
<style type="text/css">
  #error-block {
    background: pink;
    border: 1px solid red;
    color: red;
    width: 50%;
  }
</style>
<div class="content-wrapper background">
  <div class="container layer">
    <div class="login-box">
    <?php if (!empty($errors)) : ?>
        <div id="error-block">
            <ul>
            <li><?php var_dump($entries); ?></li>
            <li><?php var_dump($errors); ?></li>
    <?php foreach($errors as $field => $msg) : ?>
                <li><?php echo $msg; ?></li>
    <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
      <div class="login-logo">
        <a href="../../index2.html"><b>iMock</b>LOGIN</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action=""  data-toggle="validator" role="form" method="post">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email" data-error="Bruh, that email address is invalid" value="<?php echo $email; ?>" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <!-- <input type="checkbox"> Remember Me -->
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
  </div>
  <!-- /.container -->
</div>