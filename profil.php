<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Admin Theme Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href="assets/css/admin.css" rel="stylesheet">
    </head>
    
    <body>
        
        <!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-toggle"></span>
			  </button>
			</div>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				
				<li class="dropdown">
				  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="#">My Profile</a></li>
				  </ul>
				</li>
				<li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
			  </ul>
			</div>
		  </div><!-- /container -->
		</div>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
		<div class="row">
			<div class="col-md-3">
			  <!-- Left column -->

			  <hr>
			  
			  <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>  
			  
			  <hr>
			  
			  <ul class="nav nav-pills nav-stacked">
				<li class="nav-header"></li>
				<li><a href="menu.php"><i class="glyphicon glyphicon-list"></i> Menu</a></li>
				<li><a href="profil.php"><i class="glyphicon glyphicon-briefcase"></i> Profil</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
				<li><a href="daftar_pegawai.php"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
				<li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
			  </ul>
			</div><!-- /col-3 -->
			<div class="col-md-9">

			  
				<div class="row">
				   
					  <hr>              
		   
					</div>

		<html>
		
		<head>
    		<meta charset="utf-8">
    		<link   href="css/bootstrap.min.css" rel="stylesheet">
    		<script src="js/bootstrap.min.js"></script>
		</head>
	<!--case "detil":
	$detil = mysql_query("SELECT * FROM makanan WHERE MAKANAN_ID = '$_GET[id]'");
	$data = mysql_fetch_array($detil);	
	echo "-->
	<body>
			
            <div class="col-md-8">
                <table border="1" class="table table-striped table-bordered">
                      <thead>
			
				<tr>
					<td align=center width=180px><b>Foto</b></td>
					<td align=center colspan=2><b>Profil</b></td>
				</tr>
				<tr>
					<td align=center><img src=images/111220.jpg width=150px height=170px></td>
					<td><!--<td valign=top>-->
					<table border=0 class=datatable cellpadding=10 cellspacing=10 align=center>
						
							<tr>
								<td width=100px><b>Nama</b></td>
								<td width=1%>:</td>
								<td>Abdul Sehun</td>							
							</tr>
							<tr>
								<td><b>Lahir</b></td>
								<td>:</td>
								<td>12 April 1994 (23 tahun)</td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td>:</td>
								<td>Korea Selatan</td>
							</tr>
							<tr>
								<td colspan=3 align=right><a href=index.html><< Ke Menu Utama</a></td>
							</tr>
							</thead>						
						</table>
						</td>
						</tr>
						</div>
						</div>
					
	</body>	
	</html>

<script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".alert").addClass("in").fadeOut(4500);
			$('[data-toggle=collapse]').click(function(){
				$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
			});
        });
        </script>
    
</body></html>