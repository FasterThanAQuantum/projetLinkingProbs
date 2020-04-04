<?php
require_once 'head.php';
echo ('
<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

          <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        <i class="fas fa-check-circle"></i>
                        <h1 class="h4 text-gray-900 mb-4">you are registered</h1>
                        <a href="login.php"><button class="btn btn-primary btn-user btn-block" >Login</button></a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>

      </div>


</body>




<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</html>



');



 ?>
