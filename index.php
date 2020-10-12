<?php
	include('./models/postModel.php');
	$post = new Post();
?>

<!DOCTYPE html>
<html lang="en">
  	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    	<!-- brower tab icon -->
    	<link rel="shortcut icon" type="image/png" href="favicon.ico">

    	<!-- CSS -->
    	<link rel="stylesheet" type="text/css" href="public/plugins/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="public/plugins/fontawesome/css/font-awesome.min.css">
    	<link rel="stylesheet" type="text/css" href="public/customs/css/style.css">

    	<title>Aizentt | Smart Solutions</title>
  	</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="50">
	<header class="header">
		<nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-lg" id="myScrollspy">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="public/images/logo.png" width="40" height="40" alt="">
					<span class="company-name">Company</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#home"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about"><i class="fa fa-info-circle"></i> About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services"><i class="fa fa-cog"></i> Services</a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link" href="#portfolio"><i class="fa fa-folder-open"></i> Portfolio</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="#contacts"><i class="fa fa-phone"></i> Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main class="main content">
		<div class="home" id="home">
			<div class="bd-example">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active" data-interval="3000">
							<img src="public/images/intro-carousel/1.jpg" class="d-block w-100 carousel-image" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h2>GIS | Make IT Smarter</h2>
								<p>We offer you our smarter software solutions customized to your specific requirements at the most affordable prices</p>
							</div>
						</div>
						<div class="carousel-item" data-interval="2000">
							<img src="public/images/intro-carousel/2.jpg" class="d-block w-100 carousel-image" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h2>We are a small design studio dedicated to build great digital
								products.</h2>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="public/images/intro-carousel/3.jpg" class="d-block w-100 carousel-image" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<!-- <h2>Take a look at some of <a class="smoothscroll" href="#portfolio" title="portfolio" >our works</a> or 
								<a class="smoothscroll" href="#contacts" title="contact us">get in touch</a> to discuss how we can help you.</h2> -->
								<h2>Take a look at some of our works or get in touch to discuss how we can help you.</h2>
								<p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
		<div class="about" id="about">
			<div class="container">
				<div class="row content">
					<?php foreach($post->getCompanyInfo() as $company): ?>
					<div class="col-lg-12">
						<header class="section-header">
							<h3>About Us</h3>
							<p class="mt-3"><?php echo $company['body'] ?></p>
						</header>
					</div>
					<?php endforeach; ?>

					<?php foreach($post->getAbouts() as $about): ?>
					<div class="col-lg-6 mt-2">
						<div class="card">
							<img src="public/images/<?php echo $about['image_name'] ?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h1 class="h4"><?php echo $about['title'] ?></h1>
								<p  class="card-text"><?php echo $about['body'] ?></p>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="services" id="services">
			<div class="container">
				<div class="row content">
					<div class="col-lg-12 mb-3">
						<header class="section-header">
							<h3>Services</h3>
							<p class="mt-3">We offer you our smarter computing services at the lowest industry prices. Undeniably, we now live in a world of Mobile Internet Generation. Our GIS Complete Software Package is your ideal school governance technology tool in the digital 21st century. GIS is the country's pioneering and leading school ERP (Enterprise Resource Planning) software conceptualized since 1990's. It allows school administrators to manage and access their records online anytime and anywhere. The package includes the ff. systems:  Grading System GIS grading system allows teachers to record all dynamic number of activities and varying criteria weights of</p>
						</header>
					</div>
					<?php foreach($post->getServices() as $services): ?>
					<div class="col-lg-4">
						<div class="card mb-4">
							<img src="public/images/<?php echo $services['image_name'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="">
							<div class="card-body">
								<h1 class="h4"><?php echo $services['title'] ?></h1>
								<p><?php echo mb_strimwidth($services['body'], 0, 100, "...") ?></p>
								<!-- <p><a class="btn btn-sm btn-outline-primary" href="#" role="button">View details &raquo;</a></p> -->
								<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target=".modal<?php echo $services['id'] ?>">View details &raquo;</button>
								<div class="modal fade modal<?php echo $services['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $services['title'] ?></h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
											<!-- <h1 class="h4"><?php echo $services['title'] ?></h1> -->
											<p><?php echo $services['body'] ?></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- <div class="portfolio" id="portfolio">
			<div class="container">
				<div class="row content">
					<div class="col-lg-12">
						<header class="section-header">
							<h3>Portfolio</h3>
							<p class="mt-3">Our Technical Team has had over 20 years of technical training and working experiences in USA, Germany, Singapore and Philippines top universities (DLSU, UP, ADMU). We value professionalism, innovation, and excellence. We specialize primarily in developing customized Campus ERP / Corporate Software based on open-source mobile / web platform and tools (Linux, PHP, Mysql, Css, Html, Javascript) to provide the best value for money solutions to our beloved clients.</p>
						</header>
					</div>
				</div>
			</div>
		</div> -->
		<div class="contacts" id="contacts">
			<div class="container">
				<div class="row content">
					<div class="col-lg-12">
						<header class="section-header">
							<h3>Contact Us</h3>
							<p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur, molestias?</p>
						</header>
					</div>
					<div class="col-lg-4 contact-info">
						<div class="contact-address">
							<i class="fa fa-map-marker fa-2x contact-icon"></i>
							<h1>Address</h1>
							<address>Quezon City, 1106 PH</address>
						</div>
					</div>
					<div class="col-lg-4 contact-info phoneNumber">
						<div class="contact-address">
							<i class="fa fa-phone fa-2x  contact-icon"></i>
							<h1>Phone Number</h1>
							<p><a href="">(+63) 900 xxx 000</a></p>
						</div>
					</div>
					<div class="col-lg-4 contact-info">
						<div class="contact-address">
							<i class="fa fa-envelope fa-2x contact-icon"></i>
							<h1>Email</h1>
							<p><a href="">sample@gmail.com</a></p>
						</div>
					</div>
					<div class="col-lg-12 mt-5 feedback">
						<form id="contact-form" name="contact-form" action="./controllers/postController.php" method="POST">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputName">Name</label>
										<input type="text" class="form-control" name="fullname" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Fullname">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" name="email_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputSubject">Subject</label>
										<input type="text" class="form-control" name="subject" id="exampleInputSubject" aria-describedby="emailHelp" placeholder="Enter Subject">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputMsg">Your Message</label>
										<textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Message here.."></textarea>
									</div>
								</div>
							</div>
							<div class="text-center text-md-center">
								<input type="submit" class="btn btn-outline-primary" value="Send Message" name="interest">
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php foreach($post->getCompanyInfo() as $company): ?>
					<div class="col-lg-6 footer-info">
						<img src="public/images/logo.png" width="40" height="40" alt="">
						<span class="company-name"><?php echo $company['title'] ?></span>
						<p class="mt-2"><?php echo $company['body'] ?></p>
					</div>
					<?php endforeach; ?>
					
					<div class="col-lg-3 footer-contact">
						<h1 class="h4 head-title">Contact Us</h1>
						<div class="mt-4">
							<p>
								<strong>Address:</strong>
								<br> 
								Quezon City, 1106<br>
								PH<br>
								<strong>Phone:</strong> (+63) 900 xxx 000<br>
								<strong>Email:</strong> sample@gmail.com<br>
							</p>
							<div class="social-links mb-5">
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<h1 class="h4 head-title">Our Newsletter</h1>
						<div class="mt-4">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit debitis obcaecati, non architecto tenetur corporis.</p>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="subscribe">
								<div class="input-group-append">
									<button class="btn btn-primary" type="button" id="subscribe">Subscribe</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="copyright">
					<p class="mt-4">
						<strong>Company | Sample</strong>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Script -->
	<script type="text/javascript" src="public/plugins/jquery/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="public/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/customs/js/custom.min.js"></script>
</body>
</html>