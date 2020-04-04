<?php
  require_once 'head.php';
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      require_once 'sideNavInternal.php';

    ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require_once('topNav.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <hr>
                  <form class="form" action="##" method="post" id="ProfileForm">
                      <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="FNProfile"><h4>First name</h4></label>
                            <input type="text" class="form-control" name="FNProfile" id="FNProfile" placeholder="first name" required>
                          </div>
                        
                      
                          
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="LNProfile"><h4>Last name</h4></label>
                            <input type="text" class="form-control" name="LNProfile" id="LNProfile" placeholder="last name" required>
                          </div>
                      </div>
                      
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="emailProfile"><h4>email</h4></label>
                              <input type="email" class="form-control" name="emailProfile" id="emailProfile" placeholder="enter email" required>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="LoginProfile"><h4>Login</h4></label>
                              <input type="text" class="form-control" name="LoginProfile" id="LoginProfile" placeholder="enter Login" required>
                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" >                     </div>
                      </div>

                      <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                             <label for="Gender"><h4>Gender</h4></label>
                              <input type="text" class="form-control" maxlength="1" name="Gender" id="Gender" placeholder="enter Gender " >
                          </div>
                     

                          
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="AgeProfile"><h4>Age</h4></label>
                              <input type="number" class="form-control" name="AgeProfile" id="AgeProfile" placeholder="Age" >                       </div>


                      </div>

                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="heightProfile"><h4>Height</h4></label>
                            <input type="number" class="form-control" name="heightProfile" id="heightProfile" placeholder="height" >                          </div>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="weightProfile"><h4>Weight</h4></label>
                              <input type="number" class="form-control" name="weightProfile" id="weightProfile" placeholder="weight" >                          </div>

                      </div>
                         
                     
                      
                        
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>mohamed Balizi- Rim Lamrani iMM &copy;  </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <?php
    require_once('footerCommon.php');
  ?>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
