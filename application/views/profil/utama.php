<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DAEBAK CAFE</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="<?php echo base_url('asset/css/bootstrap.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('asset/css/bootstrap-responsive.css'); ?> " rel="stylesheet">
	<link href="<?php echo base_url('asset/css/style.css'); ?> " rel="stylesheet">
	<link href="<?php echo base_url('asset/css/social-icons.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Droid+Sans:400,700'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Droid+Serif'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Boogaloo'); ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Economica:700,400italic'); ?> ">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="asset/images/logo.jpg" width="200px" height="200px" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href=" <?php echo base_url('Welcome/index'); ?>">Home</a></li>
			              			<li><a href="<?php echo base_url('Welcome/produk'); ?> ">Produk Kami</a></li>
                                    <li><a href="<?php echo base_url('Welcome/detail'); ?>">Keranjang</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="<?php echo base_url('Welcome/login'); ?>">Admin</a></li>
			                  				<li><a href="<?php echo base_url('Welcome/login2'); ?>">Super Admin</a></li>			             
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2 style="color: #472c21;">KOREAN SOUP</h2>
				<p style="color: black;">Menyediakan aneka sop dengan resep ala korea</p>
				<div class="da-img"><img src="asset/images/makan/Sundubu-Jjigae.jpg" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2 style="color: #472c21;">DRAMA BINGSOO</h2>
				<p style="color: black;">Menyediakan berbagai menu makanan yang berada dalam drama korea</p>
				<div class="da-img"><img src="asset/images/makan/Patbingsoo.jpg" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2 style="color: #472c21;">KOREAN SNACK</h2>
				<p style="color: black;">Menyediakan berbagai macam snack korea</p>
				<div class="da-img"><img src="asset/images/makan/Tteokpokki.jpg" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2 style="color: #472c21;">FANDOM PUNCH</h2>
				<p style="color: black";>Menyediakan berbagai minuman dari berbagai fandom KPOP</p>
				<div class="da-img"><img src="asset/images/minum/Exotic-Alien.jpg" alt="image04" /></div>
			</div>
		</div>
		
	</div>
	<!-- end: Slider -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>Tentang Daebak Cafe</h3>
					<p>
						Daebak adalah restoran korea pertama yang mengusung konsep Fan Cafe di Indonesia. Dengan kata lain Daebak adalah The First Korean Fan Cafe in Indonesia. Konsep Korean Fan Cafe memiliki tujuan memberikan pengalaman tidak terlupakan bagi para pecinta Korea, baik suka Korea Karena Kpop, Drama, Pariwisata, atau terlebih lagi karena Kulinernya. Nuansa dan suasana Fan Cafe yang di Daebak begitu kuat terasa dari mulai desain, musik, rasa, makanan, aroma, warna (Experience Korean Taste: sight, sound, scent, taste, and touch) yang semuanya Korea banget!
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Alamat Kami</h3>
					Jl. Bungur No. 130 Jember<br />
                    Telp : 081234567890<br />
                    Email : <a href="mailto:">daebakcafe@gmail.com</a>
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-skype">
											<a href="http://skype.com"></a>
										</div>
										<div class="social-info-back social-skype-hover">
											<a href="http://skype.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-youtube">
											<a href="http://youtube.com"></a>
										</div>
										<div class="social-info-back social-youtube-hover">
											<a href="http://youtube.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
				<!--	<form id="newsletter">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="submit">
					</form> -->
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<p>
				Copyright &copy; <a href="http://www.niqoweb.com">DistroIT 2015</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('asset/js/jquery-1.8.2.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/bootstrap.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/flexslider.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/carousel.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/jquery.cslider.js'); ?> "></script>
<script src="<?php echo base_url('asset/js/slider.js'); ?> "></script>
<script defer="defer" src="<?php echo base_url('asset/js/custom.js'); ?> "></script>
<!-- end: Java Script -->

</body>
</html>