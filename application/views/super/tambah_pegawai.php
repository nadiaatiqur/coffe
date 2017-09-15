<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Daebak</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css') ; ?>" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet">
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

				<li><a href="<?php echo base_url('index.php/Welcome/logout'); ?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
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
			  
			   <ul class="nav nav-pills nav-stacked">
				<li class="nav-header"></li>
				<li><a href="<?php echo base_url('index.php/Welcome/profil'); ?>"><i class="glyphicon glyphicon-list"></i> Profil Admin</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/daftar_pegawai') ; ?>"><i class="glyphicon glyphicon-list-alt"></i> Daftar Pegawai</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/laporan'); ?>"><i class="glyphicon glyphicon-book"></i> Tabel Laporan</a></li>
				<li><a href="<?php echo base_url('index.php/Php_excel/download/') ?>"><i class="glyphicon glyphicon-file"></i> Download Laporan Excel</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/pdf') ?>"><i class="glyphicon glyphicon-file"></i> Download Laporan PDF</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/grafik') ?>"><i class="glyphicon glyphicon-star"></i> Grafik</a></li>
			  </ul>
			</div><!-- /col-3 -->
			<div class="col-md-9">

			  
				<div class="row">
				   
					  <hr>              
		   
					</div><!--/col-->
					<form action="<?php echo base_url('index.php/Welcome/tambah_aksi') ; ?>" method="post">
					  
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
								<h4>Tambah Pegawai</h4>
								</div>
							</div>
							<div class="panel-body">

							  <form class="form form-vertical">
							   <div class="col-md-6">
							   <div class="control-group">
								  <label>Name</label>
								  <div class="controls">
								   <input class="form-control" placeholder="Enter Name" type="text" name="Name">
								  </div>
								</div> 
								    <div class="control-group">
								  <label>Date</label>
								  <div class="controls">
								   <input class="form-control" placeholder="Enter Name" type="date" name="Date">
								  </div>
								</div>  
								
								<div class="control-group">
								  <label>Address</label>
								  <div class="controls">
									<textarea class="form-control" name="Address"></textarea>
								  </div>
								</div> 
								  </div>
								</div>
									<div class="col-md-1">
									</div>
									<button type="submit" class="btn btn-primary">
									  Post
									</button> 
								</form>  
						
						  </div><!--/panel content-->
						</div><!--/panel-->
					  
					</div><!--/col-span-6-->
			 
			  </div><!--/row-->
			</div><!--/col-span-9-->
		</div>
		</div>
		</div>
		<!-- /Main -->
        
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