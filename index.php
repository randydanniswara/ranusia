<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>RANUSIA</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		 <!---- animated-css ---->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Exo:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Expletus+Sans:400,700' rel='stylesheet' type='text/css'>
		
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<div class="bg">
		<!----- start-header---->
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="images/logo.png" title="RANUSIA" /></a>
						</div>
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li class="active"><a href="#home" class="scroll">Home</a></li>
								<li><a href="#services" class="scroll">Services</a></li>
								<!-- <li><a href="#port" class="scroll">Portfolio</a></li> -->
								<li><a href="#team" class="scroll">About Me</a></li>
								<li><a href="#contact" class="scroll">Contact Me</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/menu-icon.png" title="menu" /></a>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- banner ---->
			<div class="banner wow fadeIn" data-wow-delay="0.5s">
				<div class="container">
					<div class="banner-info text-center">
						<h1>Let's bring your business to our digital world!</h1><br />
						<span> </span>
						<p>We are a digital agency who want make Indonesia to be a digital nation</p>
					</div>
				</div>
			</div>
		</div>
			<!---- banner ---->
			
			<div id="services" class="services">
				<div class="container">
					<div class="service-head text-center">
						<h2>Services</h2>
						<span> </span>
					</div>
					
					<div class="services-grids text-center">
						<div class="col-md-5">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon1"> </span>
								<h3><a href="#">Web Development</a></h3>
								<p>Kami siap membantu bisnis Anda berkembang dalam dunia digital dengan bantuan suatu website</p>
							</div>
						</div>
						<div class="col-md-2"></div>
						<!-- <div class="col-md-4">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon2"> </span>
								<h3><a href="#">web development</a></h3>
								<p>Proin iaculis purus consequat sem digni ssim. Donec porttitora entum aenean rhoncus posuere odio in.</p>
							</div>
						</div> -->
						<div class="col-md-5">
							<div class="service-grid wow bounceIn" data-wow-delay="0.4s">
								<span class="service-icon3"> </span>
								<h3><a href="#">Amazing Design</a></h3>
								<p>Kami siap mempercantik bisnis Anda dengan bantuan <a href="">Hi_Design</a></p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
			</div>
			
			<div class="clearfix"> </div>
			<!--- Other Expertise ---->
			<!-- <div id="port" class="expertise">
				<div class="expertice-grids">
					<div class="col-md-8 expertice-left-grid wow fadeInLeft" data-wow-delay="0.4s">
						<div class="expertise-head">
							<h3>Other Expertise</h3>
							<p>Proin iaculis purus consequat sem cure  digni ssim. Donec porttitora entum suscipit  aenean rhoncus posuere odio in tincidunt consequat sem cure  digni ssim. </p>
						</div>
						<div class="expertise-left-inner-grids">
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon1"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>Custom setup</h4>
									<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon2"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>Cloud control</h4>
									<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon3"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>All star support team</h4>
									<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="e-left-inner-grid">
								<div class="e-left-inner-grid-left">
									<span class="e-icon4"> </span>
								</div>
								<div class="e-left-inner-grid-right">
									<h4>top notch security</h4>
									<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus.</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<a class="leran-more" href="#">Learn more</a>
					</div>
					<div class="col-md-4 expertice-right-grid wow fadeInRight" data-wow-delay="0.4s">
						
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div> -->
			<!--- Other Expertise ---->
			<!--- portfolio ---->
			<!-- <div class="portfolio">
				<div class="portfolio-top">
					<div class="col-md-8">
						<div class="portfolio-top-left wow fadeInLeft" data-wow-delay="0.4s">
							<h3>Amazing Portfolio</h3>
							<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</p>
							<p>Iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat.</p>
							<div class="portfolio-top-left-grids">
								<div class="portfolio-top-left-grid">
									<div class="portfolio-top-left-grid-left">
										<span class="p-icon1"> </span>
									</div>
									<div class="portfolio-top-left-grid-right">
										<h5>Sail Away Your Worries</h5>
										<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="portfolio-top-left-grid">
									<div class="portfolio-top-left-grid-left">
										<span class="p-icon2"> </span>
									</div>
									<div class="portfolio-top-left-grid-right">
										<h5>All-star support team</h5>
										<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="portfolio-top-left-grid">
									<div class="portfolio-top-left-grid-left">
										<span class="p-icon3"> </span>
									</div>
									<div class="portfolio-top-left-grid-right">
										<h5>fully Integrated service</h5>
										<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 portfolio-top-right-inner wow fadeInRight" data-wow-delay="0.4s">
						<div class="portfolio-top-right">
							
						</div>
					</div>
					<div class="clearfix"> </div> -->
					<!---- portfolio-works ---->
					
					<!---- portfolio-works ---->
				<!-- </div>
			</div> -->
			<!--- portfolio ---->
			<!---- about ---->
			<!---start-about---->
		
			
			<div id="team" class="team-members">
					<div class="wrap"> 
						<div class="tm-head">
							<h2>About Me</h2>
							
						</div>
						<div class="tm-head-grids">

							<div class="tm-head-grid wow fadeInLeft" data-wow-delay="0.4s">
								<img src="images/team-member1.jpg" alt="">
								<h4>Randy Danniswara, S.Kom.</h4>
								<!-- <h5>Directur</h5> -->
								<ul class="top-social-icons">
									<!-- <li><a class="twitter" href="#"> </a></li>
									<li><a class="facebook" href="#"> </a></li>
									<li><a class="pin" href="#"> </a></li> -->
									<div class="clear"> </div>
								</ul>
							</div>


				<!-- <div class="about-time-line">
					<li>
							<div class="cbp_tmicon img1"> </div>
							<div class="cbp_tmlabel wow fadeInLeft" data-wow-delay="0.4s">
								<h2>2008-2011</h2>
								<p>SMA Negeri 8 Bandung</p>
							</div>
					</li>
					<li>
							<div class="cbp_tmicon1 img2"> </div>
							<div class="cbp_tmlabel cbp_tmlabel1 wow fadeInRight" data-wow-delay="0.4s">
								<h2>2011-2015</h2>
								<p>Sistem Informasi, Fakultas Ilmu Komputer, Universitas Indonesia</p>
							</div>
					</li><br />
					<li>
							<div class="cbp_tmicon2 img3"> </div>
							<div class="cbp_tmlabel wow fadeInLeft" data-wow-delay="0.4s">
								<h2>2015-....</h2>
								<p>Nuesto Technology</p>
							</div>
					</li> -->
					<!-- <li>
							<div class="cbp_tmicon3 img4"> </div>
							<div class="cbp_tmlabel cbp_tmlabel1 wow fadeInRight" data-wow-delay="0.4s">
								<h2>January 2013Our Triumph </h2>
								<p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean.</p>
							</div>
					</li> -->
					<!-- <li>
							<div class="cbp_tmicon4 img5"> </div>
					</li> -->
					<!-- <div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div> -->
				
				<!---//End-about-time-line---->
			<!---- about ---->
		</div>
		<div class="portfolio-works">
			<!-- <div class="col-md-1 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s"></div> -->
						<div class="col-md-6 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/1.png" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>Coffee Indo</h4>
								<p>Ini adalah tampilan website e-commerce sederhana yang dikerjakan dalam memenuhi proyek dari seorang mahasiswa guna memenuhi tugasnya. Sehingga website ini hanya bersifat local tanpa dapat diakses menggunakan internet.</p>
							</div>
						</div>
						<div class="col-md-6 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/2.png" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>SILAB (Sistem Informasi Laboratorium Fasilkom UI)</h4>
								<p>Ini adalah tampilan website sistem informasi yang dikerjakan guna memenuhi proyek dari pihak pengurus Lab Fasilkom UI serta dalam pengerjaan tugas akhir Propensi (mata kuliah di Fasilkom UI). Sehingga website ini hanya bersifat local tanpa dapat diakses menggunakan internet.</p>
							</div>
						</div>
						<!-- <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/p3.jpg" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>Project title</h4>
								<p>Here you can find some of our latest works,  Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. to see the details of these works just click the thumbnails below.</p>
							</div>
						</div> -->
						<!-- <div class="col-md-1 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s"></div>
						<div class="col-md-1 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s"></div> -->
						<div class="col-md-6 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/3.png" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>SIYU (Sistem Informasi YDBP UI)</h4>
								<p>Ini adalah tampilan website sistem informasi guna memenuhi proyek dari pihak YDBP UI. Website ini dapat diakses di http://siyu.ydbpui.org/ tetapi harus login terlebih dahulu.</p>
							</div>
						</div>
						<div class="col-md-6 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/4.png" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>KFood</h4>
								<p>Ini adalah tampilan website yang dikerjakan guna memenuhi proyek dari pihak KFood.</p>
							</div>
						</div>
						<!-- <div class="col-md-4 portfolio-work-grid wow bounceIn" data-wow-delay="0.4s">
							<div class="portfolio-work-grid-pic">
								<img src="images/p6.png" title="name" />
							</div>
							<div class="portfolio-work-grid-caption">
								<h4>Project title</h4>
								<p>Here you can find some of our latest works,  Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. to see the details of these works just click the thumbnails below.</p>
							</div>
						</div> -->
						<div class="clearfix"> </div>
					</div>
							<!-- <div class="tm-head-grid wow fadeInUp" data-wow-delay="0.4s">
								<img src="images/team-member2.jpg" alt="">
								<h4>Rico Massimo</h4>
								<h5>Coder</h5>
								<ul class="top-social-icons">
									<li><a class="twitter" href="#"> </a></li>
									<li><a class="facebook" href="#"> </a></li>
									<li><a class="pin" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="tm-head-grid wow fadeInRight" data-wow-delay="0.4s">
								<img src="images/team-member3.jpg" alt="">
								<h4>Uku Mason</h4>
								<h5>Graphic Designer</h5>
								<ul class="top-social-icons">
									<li><a class="twitter" href="#"> </a></li>
									<li><a class="facebook" href="#"> </a></li>
									<li><a class="pin" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div> -->
							<div class="clearfix"> </div>
						</div>
						<!-- <p class="team-info">Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt proin iaculis.</p> -->
					</div>
				
			<div class="clearfix"> </div>
			<div id="contact" class="contact">
				<div class="container">
				<div class="contact-grids">
					<div class="col-md-7">
						<div class="contact-left wow fadeInRight" data-wow-delay="0.4s">
							<h3>Contact Me</h3>
							<label>Don't be shy, drop us an email!</label>
							<div class="contact-left-grids">
								<div class="col-md-5">
									<div class="contact-left-grid">
										<p><span class="c-mobi"> </span>085775373760</p>
										<!-- <p><span class="c-twitter"> </span><a href="#">@ranusia</a></p> -->
										<!-- <p><span class="c-pluse"> </span><a href="#">plus.com/dreams</a></p> -->
									</div>
								</div>
								<div class="col-md-7">
									<div class="contact-right-grid">
										<p><span class="c-msg"> </span><a href="randy.danniswara@gmail.com">randy.danniswara@gmail.com</a></p>
										<!-- <p><span class="c-face"> </span><a href="#">facebook.com/dreams</a></p>
										<p><span class="c-pin"> </span><a href="#">pinterest.com/dreams</a></p> -->
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="contact-right wow fadeInLeft" data-wow-delay="0.4s">
							<?php
							//if "email" variable is filled out, send email
							  if (isset($_REQUEST['email']))  {
							  
							  //Email information
							  $admin_email = "randy.danniswara@gmail.com";
							  $email = $_REQUEST['email'];
							  $name = $_REQUEST['name'];
							  $message = $_REQUEST['message'];
							  
							  //send email
							  mail($admin_email, "$name", "From:" . $email, $message);
							  
							  //Email response
							  echo "Thank you for contacting me!";
							  }
							  
							  //if "email" variable is not filled out, display the form
							  else  {
							?>
							<form method="post">
								<input type="text" class="text" name="name" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
					 			<input type="text" class="text" name="email" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
					 	 		<textarea name="message" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
								<input class="wow shake" data-wow-delay="0.3s" type="submit" value="Send Message" />
							</form>
							<?php
							  }
							?>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- copy-right -->
				<!-- <div class="copy-right text-center">
					<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
					<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div> -->
				<!--- copy-right ---->
			</div>
			</div>
			</div>
	</body>
	<footer>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-77923043-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</footer>
</html>

