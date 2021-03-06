  <!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Admin Theme Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        
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
		
				<li><a href="<?php echo base_url('index.php/Welcome/logout') ;?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
			  </ul>
			</div>
		  </div><!-- /container -->
		</div>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
		<div class="row">
			<div class="col-md-9">

				<div class="row">          
		   
					</div>
					<div class="row">           
		   
					</div><!--/col-->
					<?php foreach ($menu as $m ) { ?>
<form action="<?php echo base_url('index.php/Welcome/update_menu/').$m->id ;?>" method="post">
					  
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
								<h4>Edit Menu Cafe</h4>
								</div>
							</div>
							<div class="panel-body">

							  <form class="form form-vertical">
							   <div class="col-md-6">
							   <div class="control-group">
								  <label>Makanan</label>
								  <div class="controls">
	 <input class="form-control" placeholder="Masukkan Nama" type="text" name="makanan" value="<?php echo $m->makanan; ?>">
								  </div>
								</div> 

								<div class="control-group">
								  <label>Harga Makanan</label>
								  <div class="controls">
	<input class="form-control" placeholder="Masukkan Harga" type="text" name="harga_makanan" value="<?php echo $m->harga_makanan; ?>">
								  </div>
								</div>

								    <div class="control-group">
								  <label>Minuman</label>
								  <div class="controls">
	<input class="form-control" placeholder="Masukkan Nama" type="text" name="minuman" value="<?php echo $m->minuman; ?>">
								  </div>
								</div>

								<div class="control-group">
								  <label>Harga Minuman</label>
								  <div class="controls">
	<input class="form-control" placeholder="Masukkan Harga" type="text" name="harga_minuman" value="<?php echo $m->harga_minuman; ?>">
								  </div>
								</div>

								<div class="control-group">
								  <label>Masukkan Gambar</label>
								  <div class="controls">
								   <?php echo form_open_multipart('Welcome/aksi_foto');?>
								  <img src="<?php echo base_url('asset/images/').$m->gambar_minuman; ?>" style="width: 150px;"><br>
									<input class="form-control" type="file" name="gambar_minuman" value="<?php echo $m->gambar_minuman; ?>">
								  </div>
								</div> 
								  </div>
								</div>    
								<div class="row"></div>
								<div class="col-md-8">
								<div class="control-group">
									<label></label>
									<div class="controls">
									<button type="submit" class="btn btn-primary">
									  Post
									</button><br><br>
									</div>
									</div>
								</div> 
								<?php } ?>
								</form>  
						
						  </div><!--/panel content-->
						</div><!--/panel-->
			 
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