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
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="images/blog/blog_hed-1.jpg" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">18</a>
                            <a href="#">Oct</a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">Commercial Construction &amp; Renovation</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i>Emran Khan</a>
                        <ul class="like_share">
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
                            <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                        <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                        <div class="tag">
                            <h4>TAG</h4>
                            <a href="#">PAINTING</a>
                            <a href="#">CONSTRUCTION</a>
                            <a href="#">PAINTING</a>
                        </div>
                    </div>
                    <div class="client_text">
                        <img class="img-circle" src="images/testimonial-4.jpg" alt="">
                        <a class="client_name" href="#">Emran Khan</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="control button_all" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Construction Data Company</a>
                        <a class="control button_all" href="#">Best Construction Management <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="comment_area">
                        <h3>2 Comment</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/testimonial-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a class="media-heading" href="#">Emran Khan</a>
                                <h5>Oct 18, 2016</h5>
                                <p>Curabitur eleifend mattis velit, gravida posuere mauris dapibus non.</p>
                                <a class="reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment_area reply_comment">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/testimonial-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a class="media-heading" href="#">Prodip Ghosh</a>
                                <h5>Oct 18, 2016</h5>
                                <p>Curabitur eleifend mattis velit, gravida posuere mauris dapibus non.</p>
                                <a class="reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="post_comment">
                        <h3>Post A Comment</h3>
                        <form class="comment_box">
                           <div class="col-md-6">
                               <h4>Name</h4>
                               <input type="text" class="form-control input_box" id="fullname" placeholder="">
                           </div>
                           <div class="col-md-6">
                               <h4>Email</h4>
                               <input type="text" class="form-control input_box" id="email" placeholder="">
                           </div>
                           <div class="col-md-12">
                               <h4>Your Comment</h4>
                               <textarea class="form-control input_box" placeholder=""></textarea>
                               <button type="submit">Post Comment</button>
                           </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 widget_area">
                    <div class="resent">
                        <h3>RECENT STORIES</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about IT industry trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about lifestyle growth &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/blog/rs-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="">Get informed about Jobs trends &amp; development.</a>
                                <h6>Oct 19, 2016</h6>
                            </div>
                        </div>
                    </div>
                    <div class="resent">
                        <h3>CATEGORIES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Technology</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Jobs</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Lifestyle</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Design</a></li>
                        </ul>
                    </div>
                    <div class="resent">
                        <h3>USER INFO</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php 
							$name = $_SESSION['fullname'];				
                            echo $name;?></a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php 
							$mail = $_SESSION['email'];				
							echo $mail;?></a></li>
                             <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php 
                           $user = $_SESSION['username'];				
							echo $user;?></a></li>
                             <li><a href="logout.php"><i class="fa fa-arrow-right" aria-hidden="true"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </div>
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
    </section>
    <!-- End Forum in Details area -->
    
    <!-- Footer Area -->
    <footer class="footer_area">
       <?php include('includes/footer.php');?>
    </footer>
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
