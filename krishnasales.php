<html>

<head>
	<title>Home</title>
	<!--Css-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
	<!-- font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
	<!--Script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Angular js-->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
	<style>
		/* * footer p{
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
			text-decoration: none;
		} */
	</style>
</head>
<style>
	.last {
		color: white;
		border: 2px double blue;
		background-color: black;
		font-size: 18px;
	}

	.login_btn {
		opacity: 0.5;
	}

	.inner {
		overflow: hidden;
	}

	.inner img {
		transition: all 1.1s ease;
	}

	.inner:hover img {
		transform: scale(1.1);
	}

	/*footer*/
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

	body {
		line-height: 1.5;
		font-family: 'Poppins', sans-serif;
	}

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}

	.container {
		max-width: 1170px;
	}

	.row {
		display: flex;
		flex-wrap: wrap;
	}

	ul {
		list-style: none;
	}

	a.stretched-link {
		color: black !important;
		text-decoration: none;
	}
	a.stretched-link:hover {
		color: blue !important;
	}

	.box {
		background-color: white;
		/* border: 1px solid black; */
		/* border-radius: 8px;
		border: 1px solid black; */
		margin-top: 25px;
		/* transition: transform 0.3s ease; */
	}

	img.vert-move {
		animation: move 3s infinite alternate;
	}

	/* .box:hover {
		transform: scale(1.05);
		background-color: #e9ecef;
	} */

	.footer {
		background-color: #24262b;
		padding: 70px 0;
	}

	.footer-col {
		width: 25%;
		padding: 0 15px;
		font-family: Helvetica, "Trebuchet MS", Verdana, sans-serif;
	}
	* footer p{
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; 
			text-decoration: none;
		}
	.footer-col h4 {
		font-size: 18px;
		color: #ffffff;
		text-transform: capitalize;
		margin-bottom: 35px;
		font-weight: 500;
		position: relative;
	}

	.footer-col h6{
		line-height:20px;
	}

	.footer-col ul li:not(:last-child) {
		margin-bottom: 10px;
	}

	.footer-col ul li a {
		font-size: 16px;
		text-transform: capitalize;
		color: #ffffff;
		text-decoration: none;
		font-weight: 300;
		display: block;
		transition: all 0.3s ease;
	}

	.footer-col ul li a:hover {
		color: #ffffff;
		padding-left: 8px;
	}

	/*responsive*/
	@media(max-width: 767px) {
		.footer-col {
			width: 50%;
			margin-bottom: 30px;
		}
	}

	@media(max-width: 574px) {
		.footer-col {
			width: 100%;
		}
	}

	@keyframes move {
		0% {
			transform: translateY(0);
		}
		100% {
			transform: translateY(-20px);
		}
	}

	/* .social-icons {
		list-style: none;
		display: flex;
		justify-content: center;
		padding: 15px 0;
		margin-top: 10px;
		margin-bottom: 20px;

	}

	.social-icons li {
		margin: 0 30px;
		width: 50px;
		height: 50px;
		background: #f0ecec;
		border-radius: 50%;
		transition: var(--transition);
		cursor: pointer;
		margin-top: 5px;
		box-shadow: 1px 2px 2px 2px #dcdde1;
	} */

	.social-icons {
		list-style: none;
		display: flex;
		justify-content: center;
		padding: 15px 0;
		margin-top: 10px;
		margin-bottom: 5px;
	}

	.social-icons li {
		margin: 0 30px;
		width: 50px;
		height: 50px;
		background: #f0ecec;
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		transition: var(--transition);
		cursor: pointer;
		margin-top: 5px;
		box-shadow: 1px 2px 2px 2px #dcdde1;
	}

	.social-icons li i {
		font-size: 27px;
		transition: all 0.1s linear;
	}

	.social-icons li:hover {
		transform: scale(1.2);
		background: #fff;
	}

	.fa-whatsapp:hover {
		background: white;
		color: rgb(2, 248, 2);
	}

	.fa-facebook:hover {
		background: white;
		color: rgb(2, 6, 247);
	}

	.fa-instagram:hover {
		background: white;
		color: #e84393;
	}

	.fa-youtube:hover {
		background: white;
		color: #FF0000;
	}
    .dropdown-item:hover{
        color:white;
        background:red;
        transition: 0.5s;
    }
</style>

<body ng-app="">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark " style="background-color:black;">
		<div class="container-fluid">
			<!-- <a class="navbar-brand text-light" href="index.html">Kss</a> -->
			<a href="index.php"><img src="img/nav/kss2.png" alt="klogopng" style="height: 60px;"></a>
			<button class="navbar-toggler " type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
					<li class="nav-item Active">
						<a class="nav-link  " aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Service</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Certificate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="l1.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="alogin.php">Admin</a>
					</li>
					<li class="nav-item dropdown mr-3">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					<i class="fa-solid fa-user fa-xl"></i>
        				</a>
        				<div class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="s1.php">sign up</a>
							<a class="dropdown-item" href="login.php">Login</a>
						</div>
					</li>
				</ul>
				<!-- <div class="mx-2">
					
					 <button class="btn btn-danger" onclick="window.location.href='l1.php'">login</button>
					<button class="btn btn-danger" onclick="window.location.href='s1.php'">Sing-in</button>
				</div> -->
			</div>
	</nav>

	<div id="mycarousel" class="carousel slide" data-ride="carousel">
		<!-- <ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
			<li data-target="#mycarousel" data-slide-to="3"></li>
			<li data-target="#mycarousel" data-slide-to="4"></li>
			<li data-target="#mycarousel" data-slide-to="5"></li>
			<li data-target="#mycarousel" data-slide-to="6"></li>
			<li data-target="#mycarousel" data-slide-to="7"></li>
			<li data-target="#mycarousel" data-slide-to="8"></li>
			<li data-target="#mycarousel" data-slide-to="9"></li>
			<li data-target="#mycarousel" data-slide-to="10"></li>
			<li data-target="#mycarousel" data-slide-to="11"></li>
			<li data-target="#mycarousel" data-slide-to="12"></li>
		</ol> -->
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="2000">
				<img src="img/Slider/KSS-FIRST.jpg" class="d-block w-100" alt="">
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="img/Slider/KSS-Second.jpg" class="d-block w-100" alt="">
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="img/Slider/KSS-THIRD.jpg" class="d-block w-100" alt="" style="">
			</div>
			<!-- <div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Forthkss.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Fifthkss.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Sixkss.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Sevenkss.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Eightkss.jpg" class="d-block w-100" alt="" style="">
			</div>
			<div class="carousel-item" data-interval="1000">
				<img src="img/Slider/Ninekss.jpg" class="d-block w-100" alt="" style="">
			</div> -->
		</div>
		<!-- <a href="#mycarousel" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#mycarousel" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a> -->
	</div>
	<div class="container my-4 my-5">
		<div class="row featurette d-flex justify-contect-center align-items-center" style="border: double black;">
			<div class="col-md-7">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">Krishna Sales & Service Detail's</h3>
				<div class="mb-1 text-muted">Aug 26</div>
				<p class="mb-auto">Krishna Sales & Service Best Service of Water Filters, Gas Geyser & Gharghanti.</p>
				<a href="l1.php" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-md-5">
				<div class="inner" ng-init="myvar = 'img/home/kss2.png'">
					<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" ng-src="{{myvar}}" alt="" srcset="">
				</div>
			</div>
		</div>
		<br>
		<div class="row featurette d-flex justify-contect-center align-items-center" style="border: double black;">
			<div class="col-md-7 order-md-2">
				<strong class="d-inline-block mb-2 text-success">World</strong>
				<h3 class="mb-0">SONIX Detail's</h3>
				<div class="mb-1 text-muted">Nov 26</div>
				<p class="mb-auto">The Makers of India’s No.1 Gas Geyser.</p>
				<a href="l1.php" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-md-5 order-md-1">
				<div class="inner" ng-init="myvar1 = 'img/home/SONIX.jpg'">
					<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400"
						height="500" ng-src="{{myvar1}}" alt="" srcset="">
				</div>
			</div>
		</div>
		<br>
		<div class="row featurette d-flex justify-contect-center align-items-center" style="border: double black;">
			<div class="col-md-7">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">Jagruti Company Detail's</h3>
				<div class="mb-1 text-muted">Nov 26</div>
				<p class="mb-auto">The Makers of India’s No.1 Atta Chakki.</p>
				<a href="l1.php" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-md-5">
				<div class="inner" ng-init="myvar2 = 'img/home/jagruti1.jpg'">
					<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" ng-src="{{myvar2}}" alt="" srcset="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center p-3">
				<div class="box p-4">
					<img class="vert-move mx-3" src="img/home/Mission.png" alt style="width: 90px; margin-bottom:5px; vertical-align:middle;">
					<h2 class="mx-3" style="font-size: 40px; font-weight: 600; margin-bottom: 0px;">Mission</h2>
				</div>
			</div>
			<div class="col-md-4 text-center p-3">
				<div class="box p-4">
					<img class="vert-move mx-3" src="img/home/Values.png" alt style="width: 74px; margin-bottom:5px; vertical-align:middle;">
					<h2 class="mx-3" style="font-size: 40px; font-weight: 600; margin-bottom: 0px;">Values</h2>
				</div>
			</div>
			<div class="col-md-4 text-center p-3">
				<div class="box p-4">
					<img class="vert-move mx-3" src="img/home/Vision.png" alt style="width: 145px; margin-bottom:5px; vertical-align:middle;">
					<h2 class="mx-3" style="font-size: 40px; font-weight: 600; margin-bottom: 0px;">Vision</h2>
				</div>
			</div>
		</div>
		<!-- <div class="row d-flex justify-content-center text-center">
		<h2>CHOOSE YOUR WATER PURIFIER</h2><br>
		<h4>Find the right product for you</h4><br>
		<button class="btn btn-outline-success rounded-2">
			<a href="product.php" class="text-primary text-decoration-none">All Product</a>
		</button>
		</div> -->
		<!-- <div class="text-center mt-4">
			<h2>CHOOSE YOUR WATER PURIFIER</h2><br>
			<h4>Find the right product for you</h4><br>
			<button style="border: 2px solid green; border-radius:5px; width: 100%; max-width: 150px; padding: 10px 32px;">
				<a href="product.php" style="text-decoration:none; color:black;">All Product</a>
			</button>
		</div> -->
	</div>
	<!--start footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Quick links</h4>
					<ul>
            			<li><a href="krishnasales.php">Home</a></li>
						<li><a href="login.php">About Us</a></li>
						<li><a href="login.php">Product</a></li>
						<li><a href="login.php">Service</a></li>
						<li><a href="login.php">Certificate</a></li>
						<li><a href="login.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Shooping</h4>
					<ul>
						<li><a href="login.php">Pipispon</a></li>
						<li><a href="login.php">Membran</a></li>
            			<li><a href="login.php">Booster Pump</a></li>
						<li><a href="login.php">All RO & Geyser Spar</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Contact</h4>
					<h6 style="color: white;">Bipin Parmar</h6>
					<h6 style="color: white;"><p class="footloc">🧭 D-102, 
						Varniraj Aparment,
							<br>Near Happy BGL., L.H.Road,<br> Varachha, Surat. </p></h6>
              		<h6 style="color: white;">
					<p>📱 <a href="tel:98253-17045" style="color: white;">+91 98253-17045</p></a></h6>
					<br>
				</div>
				<div class="footer-col"> 
					<ul>
						<li>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.706425301904!2d72.84776051020854!3d21.203818180408337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f0044480a91%3A0xf86e54c8262190af!2sKrishna%20Sales%20%26%20Service%20-%20Water%20Filter%20%2F%20Gas%20Geyser%20%2F%20Gharghanti!5e0!3m2!1sen!2sin!4v1736009687730!5m2!1sen!2sin" width="215" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div>
			<ul class="social-icons">
			<li>
				<a href="https://api.whatsapp.com/send?phone=9825317045&text=Hi" target="_blank" aria-label="WhatsApp" class="social-link whatsapp">
					<i class="fab fa-whatsapp"></i>
				</a>
			</li>
			<li>
				<a href="https://www.facebook.com/bipin.parmar.16568?mibextid=ZbWKwL" target="_blank" aria-label="Facebook" class="social-link facebook">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/Krishna_sales_service/?igshid=ZDdkNTZiNTM%3D" target="_blank" aria-label="Instagram" class="social-link instagram">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li>
				<a href="#" target="_blank" aria-label="YouTube" class="social-link youtube">
					<i class="fab fa-youtube"></i>
				</a>
			</li>
			</ul>
		</div>
	</footer>
	<footer>
		<p style="color:white; text-align: center; background-color: rgb(66, 66, 66); padding: 15px 0;">&copy; Copyright
      2025 <a href="index.php" style="color: white;">Himanshu Parmar</a></p>
	</footer>
	<!--end footer-->
</body>

</html>