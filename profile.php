<?php
  
  include 'db/db.php';
  include 'db/function.php';

  session_start();
  if(!isset($_SESSION['id']) AND !isset($_SESSION['user1_name']) AND !isset($_SESSION['user_username'])){
		header("location:log-in.php");
	  }

  if(isset($_GET['logout']) AND $_GET['logout'] == 'user-logout'){
    session_destroy();
    setcookie('user_re_log','',time() - (60*60*24*365));
    header("location:log-in.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" shortcut icon" type="image/x-icon" href="assets/img/logo/favicon-ultra-shots.png">
    <title><?php echo $_SESSION['user1_name'] ?></title>
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <script>
    $(document).ready(function(){
      $("#search-box").click(function(){
        $("#search").slideToggle();
      });

      $(".dropdown").click(function(){
        $(".dropdown-content").hide();
      });
      
    });
 
    </script>
    
</head>
<body>
    
    <!-- ===== NAV BAR START ===== -->
    <div class="container">
        <div class="navbar">
            <div class="nav-logo">
                <a href="index.html"><img src="assets/img/logo/ultra-Shots-black.png" alt=""></a>
            </div>
            <div class="nav-items">               
                    <input id="search-box" class="search-box" type="text" placeholder="Search">
                    <a id="search" class="search-icon" href="#"><i  class="fas fa-search"></i></a>              
                    <a class="notification" href="#"><i class="fas fa-bell"></i></a>
                    <a href="#"><img class="profile-img" src="assets/img/user_img/<?php echo $_SESSION['user_photo'];?>"></a>
                    <a class="dropdown" id="dropdown" href="?logout=user-logout"><i class="fas fa-sign-out-alt"></i></a>
                    <a class="dropdown" href="#"><i class="fas fa-cog"></i></a>        
            </div>
        </div>
    </div>
    <!-- ====== NAV BAR END ====== -->
    <hr>
    <main>
        <div class="container">
            <div class="user_detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center user_image">
                                <img src="assets/img/user_img/<?php echo $_SESSION['user_photo']; ?>" class="" alt="...">
                              </div>
                        </div>
                        <div class="col-md-8">
                            <div class="user_name">
                                <h4><?php echo $_SESSION['user1_name']; ?></h4>
                            </div>
                            <div class="user_bio">
                                <p><?php echo $_SESSION['user_bio']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="user_post">
                <div class="row">
                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/pics/1.jpg">
                            </div>
                        </div>
                    </div>

                     
                </div>
                       
    
            </div>

             <div class="upload-btn-wrapper">
  <button class="btn"><i class="fas fa-cloud-upload-alt"></i></button>
  <input type="file" name="myfile" >
</div>
    </div>
   
</main>


    <!-- ========================= FOOTER START ========================= -->
	<footer class="section-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="first-row text-light">
						<div class="container"> <span class=" main-footer-logo mb-3 "><a href="index.html"><img src="assets/img/logo/ultra-shots-white.png" alt=""></a></span>
							<p class="mt-3 text-left text-light">Some short text about company like You might remember the Dell computer commercials in which a youth reports this exciting news to his friends.</p>
							<div class="mb-3 text-left"> <a class="social-icon social-icon1 " title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a> <a class="social-icon social-icon1" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a> <a class="social-icon social-icon1" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a> </div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="second-row text-light">
						<h6 class="sr-title text-left ">About</h6>
						<ul class="list-unstyled text-left">
							<li> <a href="#">About us</a></li>
							<li> <a href="#">Services</a></li>
							<li> <a href="#">Rules and terms</a></li>
							<li> <a href="#">Blogs</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
                    


					<div class="third-row text-light">
						<h6 class="tr-title text-light">For users</h6>
						<ul class="list-unstyled text-left">
							<li> <a href="#"> User Login </a></li>
							<li> <a href="#"> User register </a></li>
							<li> <a href="#"> Account Setting </a></li>
							<li> <a href="#"> My Orders </a></li>
							<li> <a href="#"> My Wishlist </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="third-row text-light">
						<h6 class="tr-title text-light">For users</h6>
						<ul class="list-unstyled text-left">
							<li> <a href="#"> User Login </a></li>
							<li> <a href="#"> User register </a></li>
							<li> <a href="#"> Account Setting </a></li>
							<li> <a href="#"> My Orders </a></li>
							<li> <a href="#"> My Wishlist </a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="fifth-row">
						<h6 class="title text-left">Our app</h6>
						<a href="#" class="d-block mb-2 text-left"><img src="assets/img/misc/appstore.png" height="40"></a>
						<a href="#" class="d-block mb-2 text-left"><img src="assets/img/misc/playmarket.png" height="40"></a>
					</div>
				</div>
			<hr>
			<section class="container footer-copyright">
				<p id="reserve" class="float-left text-muted">All Right Reserved</p>
				<p target="_blank" class="float-right text-muted"> Made with by Team **** <i class="fas fa-heart"></i> by Team **** </p>
			</section>
		</div>
	</footer>
	<!-- ========================= FOOTER END // ========================= -->
	<!-- =========================Mobile FOOTER ========================= -->
	<footer class="mobile-footer">
		<div class="container"> <span class=" footer-logo mb-3 "><a href="index.html"><img src="assets/img/logo/ultra-shots-white.png" alt=""></a></span>
			<div class="social-part mb-2"> <a class="social-icon social-icon1 " title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a> <a class="social-icon social-icon1" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram"></i></a> <a class="social-icon social-icon1" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter"></i></a> </div>
		</div>
		<hr>
		<section class="container footer-copyright">
			<p id="reserve" class="text-muted">All Right Reserved</p>
			<p target="_blank" class="text-muted"> Made with by Team **** <i class="fas fa-heart"><br></i> by Team **** </p>
		</section>
	</footer>
	<!-- =========================Mobile FOOTER END // ========================= -->



    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $('#search').click(function(){
            $('#search-box').toggle();
        });
    </script>
</body>
</html>