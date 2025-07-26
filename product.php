<html>

<head>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!--Css-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .inner {
        overflow: hidden;
    }

    .inner img {
        transition: all 1.0s ease;
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

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
      box-sizing: border-box;
    }
    .product {
      border: 2px solid black;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      background: white;
      transition: transform 0.3s;
    }
    /* .product:hover {
      transform: scale(1.03);
    } */
    .product img {
      width: 100%;
      height: auto;
      max-height: 280px;
      object-fit: contain;
      transition: transform 0.5s ease;
    }
    .product:hover img {
      transform: scale(1.1);
    }

    /* Section wrappers for specific image grouping */
    .section {
      margin-bottom: 20px;
    }
    .section-4 {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    .section-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }
    .section-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    @media(max-width: 991px) {
      .section-4 { grid-template-columns: repeat(2, 1fr); }
      .section-3 { grid-template-columns: repeat(2, 1fr); }
    }
    @media(max-width: 576px) {
      .section-4, .section-3, .section-2 { grid-template-columns: 1fr; }
    }

    /*responsive*/
    @media(max-width: 767.98px) {
        /* .footer-col {
            width: 50%;
            margin-bottom: 30px;
        } */
        .footer .row {
        flex-direction: column;
        align-items: center;
      }

      .footer-col {
        width: 100% !important;
        text-align: center;
        margin-bottom: 30px;
      }

      .footer-col ul {
        padding-left: 0;
      }

      .footer iframe {
        margin: 0 auto;
        display: block;
      }
    }

    @media(max-width: 574px) {
        .footer-col {
            width: 100%;
        }
    }

    .footer {
      background-color: #24262b;
      padding: 70px 0;
    }

    .footer-col {
      width: 25%;
      padding: 0 15px;
    }

    .footer-col h4 {
      font-size: 18px;
      color: #ffffff;
      margin-bottom: 35px;
      font-weight: 500;
      position: relative;
    }

    .footer-col ul li {
      margin-bottom: 10px;
    }

    .footer-col ul li:not(:last-child) {
      margin-bottom: 10px;
    }

    .footer .footer-col ul li a {
      color: #bbbbbb;
    }

    .footer-col ul li a {
      font-size: 16px;
      color: #ffffff !important; /* forcefully gray */
      text-decoration: none;
      display: block;
      transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
      color: #ffffff !important;
      padding-left: 8px;
    }

    .social-icons {
      list-style: none;
      display: flex;
      justify-content: center;
      padding: 15px 0;
      margin: 10px 0 5px;
      flex-wrap: wrap;
      gap: 20px;
    }

    .social-icons li {
      width: 50px;
      height: 50px;
      background: #f0ecec;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 1px 2px 2px 2px #dcdde1;
      transition: transform 0.2s;
    }

    .social-icons li i {
      font-size: 27px;
    }

    .social-icons li:hover {
      transform: scale(1.2);
      background: #fff;
    }

    .fa-whatsapp:hover { color: #35e407; }
    .fa-facebook:hover { color: #1877f2; }
    .fa-instagram:hover { color: #e84393; }
    .fa-youtube:hover { color: #FF0000; }

    footer p a {
      color: white;
    }

    .map-responsive {
      height: 180px;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .map-responsive iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }
</style>

<body>
    <!--Start nav-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
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
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About Us</a>
                    </li>
                    <li class="nav-item Active">
                        <a class="nav-link " href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="service.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="certificate.php">Certificate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <!--End nav-->
    <div class="container">
        <!-- Section with 4 images -->
        <div class="section section-4">
            <div class="product"><a href="contact.php"><img src="img/gallery/Neptune.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Neptune2.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Aquajade.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Aquamars.jpg"></a></div>
        </div>

        <!-- Section with 4 images -->
        <div class="section section-4">
            <div class="product"><a href="contact.php"><img src="img/gallery/Lxone1.png"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Lxtwo2.png"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Aquanine.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Aqua 2090.jpg"></a></div>
        </div>

        <!-- Section with 3 images -->
        <div class="section section-3">
            <div class="product"><a href="contact.php"><img src="img/gallery/Silver.png"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Durable.png"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Eco.png"></a></div>
        </div>

        <!-- Section with 2 images -->
        <div class="section section-2">
            <div class="product"><a href="contact.php"><img src="img/gallery/Silver-inline.png"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/ppspun.jpg"></a></div>
        </div>

        <!-- Section with 3 images -->
        <div class="section section-3">
            <div class="product"><a href="contact.php"><img src="img/gallery/6l.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/10l.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/16l.jpg"></a></div>
        </div>

        <!-- Section with 4 images -->
        <div class="section section-4">
            <div class="product"><a href="contact.php"><img src="img/gallery/Aura.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Flora.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Fluidic.jpg"></a></div>
            <div class="product"><a href="contact.php"><img src="img/gallery/Olivia.jpg"></a></div>
        </div>
        <!-- <div class="flex-container"  style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;" ng-controller="mycontrol">
                <div class="inner"><center><a href="contact.php"><img src="img/gallery/Neptune.jpg" width="214px;" height="280px;"
                        style="border-radius: 5px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner"><center><a href="contact.php"><img src="img/gallery/Neptune2.jpg" width="214px;" height="272px;"
                        style="border-radius: 5px; margin-top: 5px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Aquajade.jpg" width="218px;" height="272px;" style="margin-top: 10px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Aquamars.jpg" width="218px;" height="260px;" style="margin-top: 15px;"></a></center>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Lxone1.png" width="190px;" height="265px;" style="margin-top: 15px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Lxtwo2.png" width="230px;" height="262px;" style="margin-top: 14px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Aquanine.jpg" width="230px;" height="250px;" style="margin-top:20px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Aqua 2090.jpg" width="265px;" height="290px;" style=""></a></center>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Silver.png" width="230px;" height="250px;" style="margin-top: 24px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Durable.png" width="230px;" height="250px;" style="margin-top: 24px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Eco.png" width="230px;" height="240px;" style="margin-top:30px;"></a></center>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Silver-inline.png" width="265px;" height="290px;" style=""></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/ppspun.jpg" width="230px;" height="170px;" style="margin-top: 65px;"></a></center>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/6l.jpg" width="200px;" height="250px;" style="margin-top: 21px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/10l.jpg" width="200px;" height="250px;" style="margin-top: 22px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/16l.jpg" width="170px;" height="240px;" style="margin-top:27px;"></a></center>
                </div>
            </div>
        </div>
        <div class="flex-container" style="justify-content: center;">
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Aura.jpg" width="220px;" height="270px;" style="margin-top: 9px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Flora.jpg" width="220px;" height="270px;" style="margin-top: 9px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Fluidic.jpg" width="220px;" height="270px;" style="margin-top:11px;"></a></center>
                </div>
            </div>
            <div style="border: Solid black; border-radius: 10px; position: relative;">
                <div class="inner">
                    <center><a href="contact.php"><img src="img/gallery/Olivia.jpg" width="220px;" height="270px;" style="margin-top:5px;"></a></center>
                </div>
            </div>
        </div> -->
    </div>
    <br>
    <!--start footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
					<h4>Quick links</h4>
					<ul>
            <li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="product.php">Product</a></li>
						<li><a href="service.php">Service</a></li>
						<li><a href="certificate.php">Certificate</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Shoping</h4>
					<ul>
            <li><a href="product.php">Pipispon</a></li>
						<li><a href="product.php">Membran</a></li>
            <li><a href="product.php">Booster Pump</a></li>
						<li><a href="product.php">All RO & Geyser Spare Parts</a></li>
					</ul>
				</div>
        <div class="footer-col">
					<h4>Contact</h4>
					<h6 style="color: white; font-weight: 500; margin-bottom: 8px;">Bipin Parmar</h6>
					<h6 style="color: white; margin-bottom: 6px;"><p class="footloc">🧭 D-102, 
						Varniraj Aparment,
							<br>Near Happy BGL., L.H.Road,<br> Varachha, Surat. </p></h6>
          <h6 style="color: white;">
					<p style="color: white; margin-bottom: 0;">📱 <a href="tel:98253-17045" style="color: white; text-decoration: none;">+91 98253-17045</p></a></h6>
					<br>
				</div>
        <div class="footer-col">
          <h4>Our Location</h4>
          <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.706425301904!2d72.84776051020854!3d21.203818180408337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f0044480a91%3A0xf86e54c8262190af!2sKrishna%20Sales%20%26%20Service%20-%20Water%20Filter%20%2F%20Gas%20Geyser%20%2F%20Gharghanti!5e0!3m2!1sen!2sin!4v1736009687730!5m2!1sen!2sin"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
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