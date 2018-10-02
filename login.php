<?php 
session_start();
ob_start();
include('includes/dbconnect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include ('includes/head.php');?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Top Header_Area -->
	<?php include('includes/header.php');?>
	<!-- End Header_Area -->

    <!-- All Signup and Login Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info send_message">
                    <h2>Signup</h2>
                    <?php include ('includes/_signup.php');?>
                    <form action="" method="post" class="form-inline contact_box">
                        <input type="text" name="fullname" id="fullname" class="form-control input_box" placeholder="Full Name *">
                        <input type="text" name="username" id="username" class="form-control input_box" placeholder="User Name *">
                        <input type="email" name="email" id="email" class="form-control input_box" placeholder="Your Email *">
                        <input type="password" name="password" id="password" class="form-control input_box" placeholder="Password *">
                        <input type="password" name="c_password" id="c_password" class="form-control input_box" placeholder="Confirm Password *">
                        <button type="submit" name="signup" class="btn btn-default">Sign Up</button>
                    </form>
                    
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Login</h2>
                    <?php include('includes/_login.php');?>
                    <form action="" method="post" class="form-inline contact_box">
                        <input type="email" name="email" id="email" class="form-control input_box" placeholder="Email *">
                        <input type="password" name="password" id="password" class="form-control input_box" placeholder="Password *">
                       	<button type="submit" name="login" class="btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    <!-- Footer Area -->

    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
