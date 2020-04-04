<?php
 require_once('head.php');
?>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="registered.php" id="registerForm">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="Fname" placeholder="First Name" name="Fname" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="Lname" placeholder="Last Name" name="Lname" required>
                  </div>
                </div>
                <div class="form-group" >
                  <input type="text" class="form-control form-control-user" id="LoginInput" placeholder="login" name="LoginInput" required>
                </div>
                <div class="form-group" >
                  <input type="email" class="form-control form-control-user" id="EmailInput" placeholder="Email Address" name="EmailInput" required>
                </div>
                <div class="form-group row" >
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="AgeInput" name="AgeInput" min="16" max="160" placeholder="Age">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" id="genderInput" name="genderInput" maxlength="1" class="form-control form-control-user" placeholder="Gender: Male(M), Female(F) or other(O)">
                  </div>
                  
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="weightInput" name="weightInput" min="35" max="500" placeholder="weight(kg)">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" id="heighInput" name="heighInput" class="form-control form-control-user" min="100" max="250" placeholder="height (cm)">
                  </div>
                  
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="InputPassword" placeholder="Password" name="InputPassword" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="RepeatPassword" placeholder="Repeat Password" name="RepeatPassword" required>
                  </div>
                </div>
                <div>
                  <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">
                </div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php
    require_once('footerCommon.php');
  ?>

</body>

</html>
