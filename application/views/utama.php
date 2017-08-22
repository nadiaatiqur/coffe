<?php echo "string"; ?>
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Circle by templatemo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Circle Template
    http://www.templatemo.com/tm-410-circle
    -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/normalize.min.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/font-awesome.min.css') ;?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/animate.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/templatemo_misc.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/templatemo_style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') ?>">

    <script src="<?php echo base_url('asset/js/vendor/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- templatemo 410 circle -->
</head>
<body>

    
    <div class="bg-overlay"></div>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a href="#"><img src="images/logo.png" alt="Circle Template">
                            <span>HALAMAN PENGUNJUNG</span></a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" id="#homebutton">Home</a></li>
                            <li><a class="show-1" href="#">MAKANAN & MINUMAN</a></li>
                            <li><a class="show-2" href="#">Gallery</a></li>
                            <li><a class="show-3" href="#">About</a></li>
                            <li><a rel="nofollow" href="<?php echo base_url('index.php/Welcome/login')?>" target="_parent">LOGIN ADMIN</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">

                <div id="menu-container">
                    <div id="menu-1" class="about content">
                      <h2 style="color: white;">NO. MEJA : <input type="text">
                      <button class="btn-lg"><a href="application/views/tabel.php">PESAN</a></button>
                      </h2>

                        <div class="row">
                        <ul class="tabs">
                                <li class="col-md-6 col-sm-6">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-cutlery"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md- col-sm-6">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-coffee"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-center" id="tab1">
                                    <h3>MENU MAKANAN</h3>
                                        <div class="col-md-4">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Miyeokguk.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Miyeokguk</h4><br>
                                                    <label class="control-label">Rp.16.363</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Kimchi-jjigae.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Kimchi Jjigae</h4>
                                                    <label class="control-label">Rp. 40.909</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Yukgaejang.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Yukgaejang</h4>
                                                    <label class="control-label">Rp. 43.636</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Sundubu-jjigae.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Sundubu Jjigae</h4><br>
                                                    <label class="control-label">Rp. 40.909</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Kimbab.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Kimbab </h4>
                                                    <label class="control-label">Rp. 30.909</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Omurice.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Omurice </h4>
                                                    <label class="control-label">Rp. 30.000</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Kimchi-Bokkeumbab.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Kimchi Bokkeumbab</h4><br>
                                                    <label class="control-label">Rp. 30.000</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/makan/Bulgogi.jpg" class="img-responsive" height="200" width="200"><br>
                                        <h4>Bulgogi</h4>
                                            <label class="control-label">Rp. 41.000</label><br><br>
                                            Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                    <div class="col-md-15">
                                    <div class="thumbnail">
                                    <div class="caption">
                                        <center><img src="asset/images/makan/Bibimbab.jpg" class="img-responsive" height="200" width="200"><br>
                                            <h4>Bibimbab</h4>
                                                <label class="control-label">Rp. 43.000</label><br><br>
                                                Jumlah:  <input type="text" class="text"><br><br>
                                        </center>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="toggle-content text-center" id="tab2">
                                    <h3>MENU MINUMAN</h3>
                                    <div class="col-md-4">
                                         <div class="thumbnail">
                                         <div class="caption">
                                            <center><img src="asset/images/minum/Exotic-Alien.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Exotic Alien</h4><br>
                                                    <label class="control-label">Rp.18.181</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/minum/Baby-Warrior.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Baby Warrior</h4>
                                                    <label class="control-label">Rp. 18.181</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/minum/Flying-Bana.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Flying Bana</h4>
                                                    <label class="control-label">Rp. 18.181</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/minum/Golden-Paradise.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Golden Paradise</h4><br>
                                                    <label class="control-label">Rp. 18.181</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/minum/Beautiful-Midnight.jpg" class="img-responsive" height="200" width="200"><br>
                                        <h4>Beautiful Midnight</h4>
                                            <label class="control-label">Rp. 18.181</label><br><br>
                                            Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-md-15">
                                        <div class="thumbnail">
                                        <div class="caption">
                                            <center><img src="asset/images/minum/Sparkling-Monalisa.jpg" class="img-responsive" height="200" width="200"><br>
                                                <h4>Sparkling Monalisa </h4>
                                                    <label class="control-label">Rp. 18.181</label><br><br>
                                                    Jumlah:  <input type="text" class="text"><br><br>
                                            </center>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                    <div class="caption">
                                        <center><img src="asset/images/minum/Dazzling-Aqua.jpg" class="img-responsive" height="200" width="200"><br>
                                            <h4>Dazzling Aqua</h4><br>
                                                <label class="control-label">Rp. 18.181</label><br><br>
                                                Jumlah:  <input type="text" class="text"><br><br>
                                        </center>
                                    </div>
                                    </div>
                                    <div class="col-md-15">
                                    <div class="thumbnail">
                                    <div class="caption">
                                        <center><img src="asset/images/minum/Oceanic-Elf.jpg" class="img-responsive" height="200" width="200"><br>
                                    <h4>Oceanic Elf</h4>
                                        <label class="control-label">Rp. 18.181</label><br><br>
                                        Jumlah:  <input type="text" class="text"><br><br>
                                        </center>
                                    </div>
                                    </div>
                                    </div>
                                <div class="col-md-15">
                                <div class="thumbnail">
                                <div class="caption">
                                    <center><img src="asset/images/minum/Poppin-Violet.jpg" class="img-responsive" height="200" width="200"><br>
                                        <h4>Poppin Violet</h4>
                                            <label class="control-label">Rp. 18.181</label><br><br>
                                            Jumlah:  <input type="text" class="text"><br><br>
                                    </center>
                                </div>
                                </div>
                                 </div> <!-- /.col-md-12 -->
                                </div> <!-- /.row -->
                                </div>

                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        
                    </div> <!-- /.about -->
                    <div class="col-md-12 col-sm-12">
                    <div id="menu-container">
                    <div id="menu-2" class="gallery content">
                        <div class="row">
                            
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g1.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g1.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g2.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g2.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g3.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g3.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g4.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g4.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g5.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g5.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g6.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g6.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g7.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g7.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g8.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g8.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/g9.jpg" alt="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/g9.jpg">
                                        <span>+</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->
                    </div> <!-- /.services -->
                    <div id="menu-3" class="about">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>ABOUT US</h3>
                                    
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->

                    </div>
                    </div>

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">
                
                	Copyright &copy; 2017 <a href="#">DAEBAK CAFE</a>
                    
                 </p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'asset/images/1.jpg'
                        }, {
                            image: 'asset/images/2.jpg'
                        }, {
                            image: 'asset/images/3.jpg'
                        }, {
                            image: 'asset/images/4.jpg'
                        }
                    ]

                });
            });
            
    </script>
    
    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
           function templatemo_map() {
                $('.google-map').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
</body>
</html>