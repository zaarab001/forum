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
         <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Technology Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Publish News</h3>
                    </div>
                    <div class="card-body">
                      <h1 align="center">Upload latest Article.</h1>
                      <?php include('includes/_post.php');?>
                      <form action="" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <select name="categories" class="form-control input_box">
							<option value="tech">*Select a Category*</option>
							<option value="Technology">Technology</option>
                            <option value="Women_in_tech">Women in Tech</option>
							<option value="Lifestyle">Lifestyle</option>
                            <option value="Code_Base">Code Base</option>
                             <option value="Jobs">Jobs</option>
						</select>
                        </div>
                        <div class="form-group">
                          <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control input-xlarge" id="description" name="description" placeholder="Description:" rows="2"></textarea>
                      </div>
                       <div class="form-group">
                        <textarea class="form-control input-xlarge" id="story" name="story" placeholder="Full Story:" rows="10"></textarea>
                      </div>
                        <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE?>">
                      Attach Image:&nbsp;&nbsp;<input id="image" name="image" type="file">
                      </div>
                        <div class="form-group">       
                          <input type="submit" value="Publish" name="publish" class="btn btn-primary">
                        </div>
                      </form>
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