<?php 
session_start();
ob_start();
include('includes/dbconnect.php');?>
<!DOCTYPE html>
<html>
  <head>
   <?php include('includes/head.php');?>
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                <?php
		 if(isset($_POST['login']))
		 {
		
//input validation
	function sanitize($connect, $str)
	{
	$str = @trim($str);
	$str = strip_tags($str);
	
	return mysqli_real_escape_string($connect,$str);
	}

			$email = sanitize($connect,$_POST['email']);
			$password = sanitize($connect,$_POST['password']);
			
			if(!(empty($email)) && !(empty($password)))
			{			 
			$Log_in = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
						
			if (mysqli_num_rows($Log_in) == 1)
			
			{
				$row = mysqli_fetch_assoc($Log_in);
				
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				
				//ob_flush();
				
				header('location:index.php');
								
				//echo '<span class="label label-success">Log in Successfull</span>';
				}
				else
				{
					echo '<span class="label label-danger">Log in detail incorrect</span>';
					}
			}
						
			}
?>
                  <form action="" method="post" class="form-validate">
                    <div class="form-group">
                      <input id="email" type="email" name="email" required data-msg="Please enter your Email" class="input-material">
                      <label for="email" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                    </div><button type="submit" name="login" class="btn btn-primary">Log in</button>
                  </form><a href="#" class="forgot-pass">Forgot Password?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>