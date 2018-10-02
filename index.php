<?php 
session_start();
ob_start();
include('includes/dbconnect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('includes/head.php');?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<?php include('includes/header.php');?>
	<!-- End Header_Area -->


    <!-- blog-2 area -->
    <section class="blog_tow_area">
         <div class="container">
             <div class="row blog_tow_row">
             <?php
							
                        $sql = "SELECT * FROM story WHERE categories = 'Technology' ORDER BY story_id DESC LIMIT 3 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "image/blog/$pic";
					$default_pic = "image/blog/default_pic.jpg";
					
					$story_id = $row['story_id'];
					$categories = $row['categories'];
					$description = $row['description'];
					$date = $row['date'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$story_pic = "<img src=\"$check_pic?\" width=\"400px\" height=\"200px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$story_pic = "<img src=\"$default_pic\" width=\"400px\" height=\"200px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <?php echo $story_pic;?>
                        <div class="renovation_content">
                            <a class="clipboard" href=""><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href=""><?php echo $categories; ?></a>
                            <div class="date_comment">
                           
                             <?php
                            	
								$clicks = 0;
								if (isset($_POST['click_button'])){
									
									$clicks = $clicks + 1; //This line click plus 1
									//echo $clicks;
								}
								?>
                             
                                <button class="btn btn-md btn-danger" ><i class="fa fa-frown-o" aria-hidden="true"></i>10<?php // echo $date;?></button>
                                <button class="btn btn-md btn-success"><i class="fa fa-signing" aria-hidden="true"></i>248</button>
                               
                            </div>
                            <p><?php echo $description;?>.</p>
                        </div>
                    </div>
                </div>
               
                <?php
					}
				}
					?>
                     <?php
							
                        $sql = "SELECT * FROM story WHERE categories = 'Women_in_tech' ORDER BY story_id DESC LIMIT 3 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "image/blog/$pic";
					$default_pic = "image/blog/default_pic.jpg";
					
					$story_id = $row['story_id'];
					$categories = $row['categories'];
					$description = $row['description'];
					$date = $row['date'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$story_pic = "<img src=\"$check_pic?\" width=\"400px\" height=\"200px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$story_pic = "<img src=\"$default_pic\" width=\"400px\" height=\"200px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
               <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <?php echo $story_pic;?>
                        <div class="renovation_content">
                            <a class="clipboard" href="" target="_blank"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href=""><?php echo $categories;?></a>
                            <div class="date_comment">
                                <button class="btn btn-md btn-danger"><i class="fa fa-frown-o" aria-hidden="true"></i>68<?php // echo $date;?></button>
                                <button class="btn btn-md btn-success"><i class="fa fa-signing" aria-hidden="true"></i>1478</button>
                            </div>
                            <p><?php echo $description;?>.</p>
                        </div>
                    </div>
                </div>
                <?php
					}
				}
				?>
                <?php
							
                        $sql = "SELECT * FROM story WHERE categories = 'Lifestyle' ORDER BY story_id DESC LIMIT 3 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "image/blog/$pic";
					$default_pic = "image/blog/default_pic.jpg";
					
					$story_id = $row['story_id'];
					$categories = $row['categories'];
					$description = $row['description'];
					$date = $row['date'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$story_pic = "<img src=\"$check_pic?\" width=\"400px\" height=\"200px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$story_pic = "<img src=\"$default_pic\" width=\"400px\" height=\"200px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
               <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <?php echo $story_pic;?>
                        <div class="renovation_content">
                            <a class="clipboard" href="" target="_blank"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href=""><?php echo $categories;?></a>
                            <div class="date_comment">
                               <button class="btn btn-md btn-danger"><i class="fa fa-frown-o" aria-hidden="true"></i>6<?php // echo $date;?></button>
                                <button class="btn btn-md btn-success"><i class="fa fa-signing" aria-hidden="true"></i>147</button>
                            </div>
                            <p><?php echo $description;?>.</p>
                        </div>
                    </div>
                </div>
                <?php
					}
				}
				?>
                 <?php
							
                        $sql = "SELECT * FROM story WHERE categories = 'Code_Base' ORDER BY story_id DESC LIMIT 3 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "image/blog/$pic";
					$default_pic = "image/blog/default_pic.jpg";
					
					$story_id = $row['story_id'];
					$categories = $row['categories'];
					$description = $row['description'];
					$date = $row['date'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$story_pic = "<img src=\"$check_pic?\" width=\"400px\" height=\"200px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$story_pic = "<img src=\"$default_pic\" width=\"400px\" height=\"200px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
                <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <?php echo $story_pic;?>
                        <div class="renovation_content">
                            <a class="clipboard" href="" target="_blank"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href=""><?php echo $categories;?></a>
                            <div class="date_comment">
                                <button  name="frown" class="btn btn-md btn-danger"><i class="fa fa-frown-o" aria-hidden="true"></i>8<?php // echo $date;?></button>
                                <button name="signing" class="btn btn-md btn-success"><i class="fa fa-signing" aria-hidden="true"></i>178</button>
                            </div>
                            <p><?php echo $description;?>.</p>
                        </div>
                    </div>
                </div>
                <?php
					}
				}
				?> <?php
							
                        $sql = "SELECT * FROM story WHERE categories = 'Jobs' ORDER BY story_id DESC LIMIT 3 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "image/blog/$pic";
					$default_pic = "image/blog/default_pic.jpg";
					
					$story_id = $row['story_id'];
					$categories = $row['categories'];
					$description = $row['description'];
					$date = $row['date'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$story_pic = "<img src=\"$check_pic?\" width=\"400px\" height=\"200px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$story_pic = "<img src=\"$default_pic\" width=\"400px\" height=\"200px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
               <div class="col-md-4 col-sm-6">
                    <div class="renovation">
                        <?php echo $story_pic;?>
                        <div class="renovation_content">
                            <a class="clipboard" href="" target="_blank"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                            <a class="tittle" href=""><?php echo $categories;?></a>
                            <div class="date_comment">
                                <button class="btn btn-md btn-danger"><i class="fa fa-frown-o" aria-hidden="true"></i>68<?php // echo $date;?></button>
                                <button class="btn btn-md btn-success"><i class="fa fa-signing" aria-hidden="true"></i>1478</button>
                            </div>
                            <p><?php echo $description;?>.</p>
                        </div>
                    </div>
                </div>
                <?php
					}
				}
				?>
                
           </div>
        </div>
    </section>
    <!-- End blog-2 area -->

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
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
