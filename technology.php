<?php 
session_start();
ob_start();
include('includes/dbconnect.php');
include ('includes/authentication.php');?>
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
	
    <!-- Forum in Details area -->
    <section class="blog_all">
                 <?php
						if ($_GET['wid'])
						{
							$wid = $_GET['wid'];
                        $sql = 'SELECT * FROM post_article WHERE categories = "Technology" && post_id = '.$wid.' ';
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "admin/image/forum/$pic";
					$default_pic = "admin/image/forum/default_pic.jpg";
					
					$post_id = $row['post_id'];
					$categories = $row['categories'];
					$title = $row['title'];
					$description = $row['description'];
					$story = $row['story'];
					$posted_by = $row['posted_by'];
					$date_posted = $row['date_posted'];
					$token = md5('topbuilder');
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$post_pic = "<img src=\"$check_pic?\" width=\"700px\" height=\"350px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$post_pic = "<img src=\"$default_pic\" width=\"700px\" height=\"350px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
        <div class="container">
            <div class="row m0 blog_row">

                <div class="col-sm-8 main_blog">
                
                    <a href="technology.php?women=34intech498ht62top1bui7lder=<?php echo $token.'&wid='.$post_id.'&token=26hytech6h50kay'; ?>"><?php echo $post_pic;?></a>
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#"><?php echo $date_posted; ?></a>
                            <a href="#">Oct</a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#"><?php echo $title; ?></a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $posted_by; ?></a>
                        <ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <p><?php echo $description; ?></p>
                        <p><?php echo $story; ?></p>
                        <?php
					}
						}
						
						}// end of if get wid
					
						?>
                        
                    </div>
                    <div class="client_text">
                        <!-- LINE HR-->
                    </div>
                    <!--COMMENT AND REPLY -->
                   
                     <div class="panel panel-default">
                                 <div class="panel-heading"><a href="" class="pull-right"><h2><i class="fa fa-yelp"></i></h2></a> <h2>Article View</h2></div>
                                  <div class="panel-body">
                                  <hr><h4>Manzuma Memunat</h4>
                                    <p>Thank you Aishat, this is my comment</p>
                                    <samp><em>6:30pm</em>&nbsp;&nbsp;12-Sept-2018</samp><br>
                                    <button name="clap" class="btn btn-md btn-light" type="button"><i class="fa fa-signing"></i> 60</button>
                                    <button name="clap" class="btn btn-md btn-light" type="button"><i class="fa fa-frown-o"></i> 01</button>
                                    <div class="clearfix"></div>
                                   <hr><div style="margin-left:45px">
                                            <h4>Aishat Aliyu</h4>
                                            <p>Thanks for posting the massage, this is the reply</p>
                                             <samp><em>8:30pm</em>&nbsp;&nbsp;13-Sept-2018</samp>
                                            <form>
                                            <div class="input-group">
                                              <div class="input-group-btn">
                                              <button class="btn btn-default">165 <i class="fa fa-heart"></i></button><button class="btn btn-default">78 <i class="fa fa-mail-reply-all"></i></button>
                                              </div>
                                              <input name="reply" type="text" class="form-control">
                                              <span class="input-group-btn"><button name="reply" class="btn btn-md btn-primary" type="button"><i class="fa fa-paper-plane"></i></button></span>
                                            </div>
                                            </form>
                                         
                                    </div>
                                    <hr>
                                     <?php include ('includes/_comment.php');?>
                                    <form action="" method="post">
                                    <div class="input-group">
                                      <div class="input-group-btn">
                                      <button class="btn btn-default"><i class="fa fa-smile-o"></i></button>
                                      </div>
                                      <input type="text" name="comment" class="form-control" placeholder="comment..">
                                      <span class="input-group-btn"><button name="comment" class="btn btn-md btn-primary" type="button"><i class="fa fa-commenting"></i></button></span>
                                    </div>
                                    </form>
                                    
                                  </div>
                               </div>
                               <!--#COMMENT AND REPLY -->
                        
                </div>
                <div class="col-sm-4 widget_area">
                <div class="resent">
                        <h3>USER INFO</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php 
                           $user = $_SESSION['username'];				
							echo $user;?></a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php 
							$mail = $_SESSION['email'];				
							echo $mail;?></a></li>
                             <li><a href="logout.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Log Out</a></li>
                             <li></li>
                        </ul>
                    </div>
                    <div class="resent">
                        <h3>RECENT ARTICLES</h3>
                        <div class="media">
                             <?php
							
                        $sql = "SELECT * FROM post_article WHERE categories = 'Technology' ORDER BY post_id DESC LIMIT 5 ";
						$query = mysqli_query($connect, $sql);
				
					if($query){
					while($row = mysqli_fetch_array($query)){
					$pic = $row['image'];
					$check_pic = "admin/image/forum/$pic";
					$default_pic = "admin/image/forum/default_pic.jpg";
					
					$post_id = $row['post_id'];
					$categories = $row['categories'];
					$title = $row['title'];
					$description = $row['description'];
					$story = $row['story'];
					$posted_by = $row['posted_by'];
					$date_posted = $row['date_posted'];
					
				
			
					//$default_pic = "members/0/default.jpg";
					if (file_exists($check_pic)) {
						$post_pic = "<img src=\"$check_pic?\" width=\"100px\" height=\"50px\" />";
						// forces picture to be 50px wide and no more
					} else {
						$post_pic = "<img src=\"$default_pic\" width=\"100px\" height=\"50px\" />"; // forces default picture to be 100px wide and no more
					}
				?>
                 
                        <div class="media">
                            <div class="media-left">
                                <a href="technology.php?women=34intech498ht62top1bui7lder=<?php echo $token.'&wid='.$post_id.'&token=26hytech6h50kay'; ?>"><?php echo $post_pic;?></a>
                            </div>
                            <div class="media-body">
                                <a href="technology.php?women=34intech498ht62top1bui7lder=<?php echo $token.'&wid='.$post_id.'&token=26hytech6h50kay'; ?>">  <?php echo $title;?></a>
                                <h6><?php echo $date_posted; ?></h6>
                            </div>
                        </div>
                       <?php
					}
				}
				  
				  ?>
                  <br><br><br>
                    
                    <div class="resent">
                        <h3>Tag</h3>
                        <ul class="tag">
                            <li><a href="#">Coding</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Analysis</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Women Who Code</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- End Forum in Details area -->
    
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
