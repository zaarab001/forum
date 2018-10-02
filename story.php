<?php 
session_start();
ob_start();
include('includes/dbconnect.php');
?>


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

    <!-- Add Story Area -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-7 contact_info send_message">
                    <h2>Post New Update</h2>
                    <?php include('includes/_story.php');?>
                    <form action="" method="post" class="form-inline contact_box" enctype="multipart/form-data">
                       <select name="categories" class="form-control input_box">
							<option value="tech">*Select a Category*</option>
							<option value="Technology">Technology</option>
                            <option value="Women_in_tech">Women in Tech</option>
							<option value="Lifestyle">Lifestyle</option>
                            <option value="Code_Base">Code Base</option>
                             <option value="Jobs">Jobs</option>
						</select>
                      <textarea class="form-control input_box" id="description" name="description" placeholder="Description" rows="2"></textarea>
                      <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE?>">
                      Attach Image: <input name="image" type="file">
                      <button type="submit" name="add" class="btn btn-default">Upload</button>
                     </form>                    
                </div>
                 <div class="col-sm-5 contact_info send_message">
                    <img src="images/logo.png" width="400px" height="100px" alt="" title="Logo">
                    <br>
                    <br>
                    <div align="center"><img src="images/preloader.gif" width="400px"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Add Story Area -->

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
