<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">


	<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

	<meta name="apple-mobile-web-app-title" content="CodePen">

	<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

	<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />




	<title>CodePen - Bootstrap Complete Footer - FreeCode</title>


	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Lobster');

		#footer_wrap {
			background: #37474f;
			padding: auto 0px;
			font-size: 14px;
		}

		#footer_wrap div {
			padding-top: 20px;
			padding-bottom: 20px;
		}

		#footer_wrap ul {
			margin-left: 0;
			padding-left: 0;
			list-style-type: none;
		}

		#footer_wrap li {
			margin-top: 20px;
			margin-bottom: 0px;
		}

		#footer_wrap a {
			text-decoration: none;
			color: #b2babb;
			outline: none;
		}

		#footer_wrap a:hover {
			text-decoration: none;
			color: #FFFFFF;
		}

		#footer_wrap h4 {
			color: #FFFFFF;
			font-weight: 600;
		}

		.logo i {
			color: #ffeb3b;
			padding-bottom: 0px;
			padding-top: 0px;
			font-size: 30px;
		}

		.logo span {
			color: #FFFFFF;
			font-size: 25px;
			font-weight: 300;
			font-family: Lobster;
		}

		.logo li {
			padding-top: 0px;
		}

		.logo p {
			text-align: justify;
			color: #b2babb;
			margin-top: 14px;
			padding-right: 30px;
		}

		.social {
			padding-top: 5px;
		}

		.social li a {
			background: none repeat scroll 0 0 #37474f;
			border: 2px solid #b2babb;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-o-border-radius: 50%;
			-ms-border-radius: 50%;
			border-radius: 25%;
			float: left;
			height: 32px;
			line-height: 32px;
			margin: 0 12px 0 0;
			padding: 0;
			text-align: center;
			width: 32px;
			transition: all 0.6s ease 0s;
			-moz-transition: all 0.6s ease 0s;
			-webkit-transition: all 0.6s ease 0s;
			-ms-transition: all 0.6s ease 0s;
			-o-transition: all 0.6s ease 0s;
			outline: none;
		}

		.social li a:hover {
			border: 2px solid #FFFFFF;
			background: #37474f;
		}

		.social li a i {
			font-size: 18px;
			margin: 0 0 0 0;
		}

		#footer_credits {
			background: #263238;
			min-height: 50px;
			color: #b2babb;
			font-size: 12px;
			padding: auto 0px;
		}

		#footer_credits ul {
			padding-left: 0px;
			list-style-type: none;
			padding-bottom: 0px;
			margin-bottom: 0px;
		}

		#footer_credits a {
			text-decoration: none;
			color: #b2babb;
			outline: none;
		}

		#footer_credits a:hover {
			text-decoration: none;
			color: #FFFFFF;
		}

		#footer_credits .copyright {
			min-height: 50px;
			padding-top: 15px;
			padding-bottom: 15px;
			text-align: left;
		}

		#footer_credits .terms div {
			text-align: center;
			padding-top: 32px;
			padding-bottom: 32px;
		}

		@media screen and (max-width: 768px) {
			#footer_credits .copyright {
				text-align: center;
			}
		}
	</style>

	<script>
		window.console = window.console || function(t) {};
	</script>



</head>

<body translate="no">

	<body>
		<footer>
			<div id="footer_wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
							<section class="logo">
								<span> <i class="fa fa-diamond"></i> Software Dynamic</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
							</section>
							<ul class="social">
								<li> <a href="#"> <i class="fa fa-facebook"></i></a> </li>
								<li> <a href="#"> <i class="fa fa-twitter"></i></a> </li>
								<li> <a href="#"> <i class="fa fa-youtube"></i></a> </li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2">
							<h4>COMPANY</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Team Blog</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Partner Programs</a></li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2">
							<h4>PRODUCTS</h4>
							<ul>
								<li><a href="#">Publishing</a></li>
								<li><a href="#">Advertising</a></li>
								<li><a href="#">Maintenance</a></li>
								<li><a href="#">Media Optimizer</a></li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2">
							<h4>SUPPORT</h4>
							<ul>
								<li><a href="#">Support</a></li>
								<li><a href="#">Forums</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Media</a></li>
							</ul>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-2">
							<h4>RECOMMEND</h4>
							<ul>
								<li><a href="#">Broadcasting</a></li>
								<li><a href="#">Hiring</a></li>
								<li><a href="#">Customer Stories</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="footer_credits">
				<div class="container">
					<div class="row">
						<div class="copyright col-sm-9 col-md-9">
							<ul>
								<li>Copyright © 2017 </li>
								<li>All Rights Reserved</li>
								<li><a href="#">Terms of Service</a> || <a href="#">Privacy Policy</a></li>
							</ul>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="terms hidden-xs">
							<div class="col-sm-1 col-md-1">
								<a href="#">Map</a>
							</div>
							<div class="col-sm-1 col-md-1">
								<a href="#">Security</a>
							</div>
							<div class="col-sm-1 col-md-1">
								<a href="#">Help</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>




</body>

</html>