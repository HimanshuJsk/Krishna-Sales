<html>

<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Service</title>
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
	.index {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		gap: 20px;
		padding: 20px;
		margin: 0 auto;
	}

	.b1, .b2, .b3 {
		height: auto;
		width: 300px;
		background-color: white;
		border: 1px solid gray;
		color: white;
		flex: 1 1 280px;
		max-width: 300px;
		box-shadow: 0 2px 8px rgba(0,0,0,0.1);
		overflow: auto;
	}

	.service-title {
		background-color: blue;
		color: white;
		padding: 5px 0;
		font-size: 18px;
		font-weight: bold;
		text-align: center;
	}

	.inner {
		overflow: hidden;
	}

	.inner img {
		width: 254px;
		height: 199px;
		transition: all 1.1s ease;
		display: block;
		margin: 10px auto 5px;
		border-radius: 5px;
		object-fit: cover;
	}


	.inner:hover img {
		transform: scale(1.1);
	}

	.b1 li, .b2 li, .b3 li {
		color: green;
		padding: 10px;
		font-size: 15px;
		line-height: 1.5;
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

	.star-rating .fa-star {
    font-size: 24px;
    color: #ccc;
    cursor: pointer;
  }

  .star-rating .fa-star.selected {
    color: gold;
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

	@media(max-width: 767.98px) {
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
</style>

<body>
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
					<li class="nav-item">
						<a class="nav-link " href="product.php">Product</a>
					</li>
					<li class="nav-item Active">
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
	</nav>
	<br>
	<div class="index">
		<div class="b1">
			<div class="service-title">Water filter service</div>
			<div class="inner">
			<img src="img/service/wservice.jfif" alt="Water Service">
			</div>
			<li>
			Bipinbhai does a good job of sales and service of water filters.
			Krishna Sales & Service nu Sales & Service work is done in Surat and
			Krishna Sales & Service Water Filters work with 100% Guarantee.
			</li>
		</div>

		<div class="b2">
			<div class="service-title">Gas geyser service</div>
			<div class="inner">
			<img src="img/service/gasgeyserservice.jpg" alt="Gas Geyser Service">
			</div>
			<li>
			Bipinbhai does a good job of sales and service of Gas geyser.
			Krishna Sales & Service nu Sales & Service work is done in Surat and
			Krishna Sales & Service Gas geyser work with 100% Guarantee.
			</li>
		</div>

		<div class="b3">
			<div class="service-title">Gharghanti service</div>
			<div class="inner">
			<img src="img/service/ghservice.jpg" alt="Gharghanti Service">
			</div>
			<li>
			Bipinbhai does a good job of sales and service of Gharghanti.
			Krishna Sales & Service nu Sales & Service work is done in Surat and
			Krishna Sales & Service Gharghanti work with 100% Guarantee.
			</li>
		</div>
	</div>
	<div class="text-center my-4 py-4 bg-light ">
		<h5>Rate Our Services</h5>
		<p>We’d love to hear your experience!</p>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#feedbackModal">
			Give Feedback
		</button>
	</div>
	<!-- Feedback Modal -->
	<!-- Feedback Modal -->
		<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">

			<form name="feedbackform" onsubmit="return validateform()" action="submit_feedback.php" method="POST">
				<div class="modal-header">
				<h5 class="modal-title" id="feedbackModalLabel">Your Feedback</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>&times;</span>
				</button>
				</div>

				<div class="modal-body">

				<div class="form-group">
					<label>Your Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter your name">
				</div>

				<div class="form-group">
					<label>Your Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter your email">
				</div>

				<div class="form-group">
					<label>Rating</label><br>
					<div class="star-rating">
					<i class="fas fa-star star" data-value="1"></i>
					<i class="fas fa-star star" data-value="2"></i>
					<i class="fas fa-star star" data-value="3"></i>
					<i class="fas fa-star star" data-value="4"></i>
					<i class="fas fa-star star" data-value="5"></i>
					</div>
					<input type="hidden" name="rating" id="rating-input">
				</div>

				<div class="form-group">
					<label>Message</label>
					<textarea name="message" rows="4" class="form-control" placeholder="Write your feedback..."></textarea>
				</div>

				</div>

				<div class="modal-footer">
				<button type="submit" class="btn btn-success btn-block">Submit Feedback</button>
				</div>
			</form>

			</div>
		</div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			const stars = document.querySelectorAll('.star-rating .fa-star');
			const ratingInput = document.getElementById('rating-input');

			stars.forEach((star, index) => {
			star.addEventListener('click', () => {
				const rating = index + 1;
				ratingInput.value = rating;

				stars.forEach((s, i) => {
				if (i < rating) {
					s.classList.add('selected');
				} else {
					s.classList.remove('selected');
				}
				});
			});
			});
		});

		function validateform() {
			var name = document.feedbackform.name.value.trim();
			var email = document.feedbackform.email.value.trim();
			var rating = document.feedbackform.rating.value.trim();
			var message = document.feedbackform.message.value.trim();

			if (name === "") {
			alert("Name can't be blank");
			return false;
			} else if (email === "") {
			alert("Email can't be blank");
			return false;
			} else if (!/^\S+@\S+\.\S+$/.test(email)) {
			alert("Invalid email format");
			return false;
			} else if (rating === "") {
			alert("Please select a star rating");
			return false;
			} else if (message === "") {
			alert("Message can't be blank");
			return false;
			}
			return true;
		}
	</script>

</body>

</html>