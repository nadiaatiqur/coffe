<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Daebak Cafe</title>
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
				<li class="dropdown">
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="#">My Profile</a></li>
				  </ul>
				</li>
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
			  
			  <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>  
			  
			  <hr>
			  
			   <ul class="nav nav-pills nav-stacked">
				<li class="nav-header"></li>
				<li><a href="<?php echo base_url('index.php/Welcome/profil'); ?>"><i class="glyphicon glyphicon-list"></i> Profil Admin</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/menu'); ?>"><i class="glyphicon glyphicon-link"></i> Update Menu</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/daftar_pegawai') ; ?>"><i class="glyphicon glyphicon-list-alt"></i> Daftar Pegawai</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/laporan'); ?>"><i class="glyphicon glyphicon-book"></i> Laporan Bulanan</a></li>
				<li><a href="<?php echo base_url('index.php/Welcome/grafik') ?>"><i class="glyphicon glyphicon-star"></i> Grafik</a></li>
			  </ul>
			</div><!-- /col-3 -->
			<div class="col-md-9">

			  
				<div class="row">
				   
					  <hr>              
		   
					</div><!--/col-->
					  
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
								<h4>Daftar Pegawai</h4>
								</div>
							</div>
							<div class="panel-body">

			<a href="<?php echo base_url('index.php/Welcome/tambah_pegawai') ; ?>" class="btn btn-primary">
			<center>Tambah Pegawai</center></a>   
							<br><br>
								<div class="row-md-6">
								<table border="1" class="table table-bordered">
									<thead>
										<tr class="danger">
											<td>No</td>
											<td>Name</td>
											<td>Date</td>
											<td>Address</td>
											<td>Action</td>
										</tr>
									</thead>
									<tbody>
										<?php
									$no = 1;
									foreach ($pegawai as $u) {
										?>
										<tr>
											<td><?php echo $no++ ; ?></td>
											<td><?php echo $u->name ; ?></td>
											<td><?php echo $u->TTL ; ?></td>
											<td><?php echo $u->address ; ?></td>
											<td>
												<a href="<?php echo base_url('index.php/Welcome/edit_pegawai/'.$u->id) ; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
												<a href="<?php echo base_url('index.php/Welcome/hapus/'.$u->id) ; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								</div>
						
						
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