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
        	
            <section class="panel">
              <header class="panel-heading">
               <h1>Manage News</h1>
              </header><br>
              <div class="row">
          <div class="col-lg-12">

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> News Id</th>
                    <th><i class="icon_calendar"></i> Title</th>
                    <th><i class="icon_mail_alt"></i> Description</th>
                    <th><i class="icon_pin_alt"></i> Full Story</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>How to Use javascript </td>
                    <td>This is description of the story</td>
                    <td>This is Full Story</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="#"><i class="icon icon-check"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon icon-close"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>How to Use python </td>
                    <td>This is description of the story</td>
                    <td>This is Full Story</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-success" href="#"><i class="icon icon-check"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon icon-close"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>This is for women in technology </td>
                    <td>This is description of the story</td>
                    <td>This is Full Story</td>
                    <td>
                      <div class="btn-group">
                       <a class="btn btn-success" href="#"><i class="icon icon-check"></i></a>
                        <a class="btn btn-danger" href="#"><i class="icon icon-close"></i></a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
              </table>
            </section>
          </div>
        </div>
                  
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