<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moduli 19 - Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
      <div class="card cardbox">
        <div class="card-header">Register</div>
        <div class="card-body">

          <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="alert alert-success text-center">Account created successfully! You can now log in.</div>
          <?php endif; ?>

          <div class="social-buttons">
            <a href="#" class="btn btn-md btn-block btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#" class="btn btn-md btn-block btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
          </div>

          <div class="login-or">
            <hr class="hr-or">
            <span class="span-or">or</span>
          </div>

          <div class="form-group">

            <form id="login-nav" method="post" action="add.php" role="form" class="form" accept-charset="UTF-8">

              <div class="form-group">
                <label class="sr-only">Username</label>
                <input type="text" id="reg_username" name="user_name" class="form-control"
                value="" placeholder="Username" required>
              </div>

              <div class="form-group">
                <label class="sr-only">Password</label>
                <div class="input-group">
                  <input type="password" id="reg_userpassword" name="user_password" class="form-control" data-placement="bottom" data-toggle="popover" data-container="body"
                  data-html="true" value="" placeholder="Password" required>

                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-append1" onclick="togglePassword()">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
                <div class="progress mt-1" id="reg-password-strength">
                    <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    </div>
                  </div>
                <div class="help-block text-right">
                  <small><a href="#">Forgot Password</a></small>
                  <span id="reg-password-quality" class="hide pull-left block-help">
                   <small>Password <span id="reg-password-quality-result"></span></small>
                  </span>
                </div>
                <div id="reg_passwordrules" class="hide password-rule mt-2"><small>

                  <ul class="list-unstyled">
                    <li class="">
                      <span class="eight-character"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                      &nbsp; min 8 character</li>
                    <li class="">
                      <span class="low-upper-case"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                      &nbsp; min 1 uppercase & 1 lowercase character</li>
                    <li class="">
                      <span class="one-number"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                      &nbsp; min 1 number</li>
                    <li class="">
                      <span class="one-special-char"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
                      &nbsp; min 1 special char (!@#$%^&*)</li>
                  </ul>
                  </small></div>

              </div>

              <div class="form-group">
                <label class="sr-only">Password Confirm</label>
                <div class="input-group">
                  <input type="password" id="reg_userpasswordconfirm" class="form-control" data-placement="bottom"
                  data-toggle="popover" data-container="body" data-html="true" placeholder="Password Confirm" required>

                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-append2" onclick="toggleConfirmPassword()">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                  </div>

                </div>
                <div class="help-block text-right">
                  <small><span id="error-confirmpassword" class="hide pull-right block-help">
                  <i class="fa fa-info-circle text-danger" aria-hidden="true"></i> Don't match password</span></small>
                </div>

              </div>

              <div class="form-group">
                <label class="sr-only">E-mail Address</label>
                <input type="email" id="reg_useremail" name="user_email" class="form-control"
                value="" placeholder="xxx@xxx.com">
              </div>

              <div class="form-group">
                <label class="sr-only">Questions</label>
                <select id="reg_userquestion" class="form-control" name="user_question">
                  <option selected> Select Questions </option>
                  <option>What's favorite color?</option>
                </select>
              </div>

              <div class="form-group">
                <label class="sr-only">Answer</label>
                <input type="text" id="reg_useranswer" name="user_answer" class="form-control"
                       value="" placeholder="Your Answer">
              </div>

              <div class="form-group">
                <button id="reg_submit" name="submit"  value="1" class="btn btn-block btn-primary" disabled="disabled">Create user</button>
                <div id="sign-up-popover" class="hide"><p>is empty</p></div>
              </div>

              <div class="form-check">
                <input type="checkbox" id="reg_remember" name="user_remember" class="form-check-input" value="1">
                <label class="form-check-label">Remember me</label>
              </div>

            </form>
          </div>

          <div class="login-or"><hr class="hr-or"></div>
          <div class="bottom text-center">
            Are you user? <a href="login.php"><b>Login</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
