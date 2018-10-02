<?php 
session_start();
ob_start();
include('includes/dbconnect.php');
include ('includes/authentication.php');?>
<!DOCTYPE html>
<html>
  <head>
   <?php include('includes/head.php');?>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <?php include('includes/headernav.php');?>
        
                
           <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Admin Panel</h2>
            </div>
          </header>
          	<section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-10">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">View Posts</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Full Story</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Okjgcfugvilhkviycgvhijbiptto</td>
                              <td>lkjgjtdtrxfghctezsrtfcgxtrzrgftyesrwdgmdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>hkgd6r rted67uyjhgdy</td>
                              <td>iu6tre78un yr786ygyuwa4setrf xdgfcrr5tyghfat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>kjhytr65y rtys7d6tyuj er57t56iyujhgd56t twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
                </div>
              </div>
            </div>
          </section>
          
          
          <!-- Page Footer-->
          <footer class="main-footer">
            <?php include('includes/footer.php');?>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>