<?php echo "jbj"; ?>
<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Daebak</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href=" <?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet">
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
				  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>Super Admin <span class="caret"></span></a>
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="#">Admin</a></li>
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
			  
			  <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Menu Utama</strong></a>  
			  
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
				   
					
				  
					<!-- center left-->	
					<div class="col-md-6">
					  
					  <hr>
					  
					  <div class="btn-group btn-group-justified">
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="glyphicon glyphicon-plus"></i><br>
						  Service
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="glyphicon glyphicon-cloud"></i><br>
						  Cloud
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="glyphicon glyphicon-cog"></i><br>
						  Tools
						</a>
						<a href="#" class="btn btn-primary col-sm-3">
						  <i class="glyphicon glyphicon-question-sign"></i><br>
						  Help
						</a>
					  </div>
					  
					  <hr>
					  
					  <div class="panel panel-default">
						  <div class="panel-heading"><h4>Reports</h4></div>
						  <div class="panel-body">
							
							<small>Success</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
								<span class="sr-only">72% Complete</span>
							  </div>
							</div>
							<small>Info</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete</span>
							  </div>
							</div>
							<small>Warning</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							  </div>
							</div>
							<small>Danger</small>
							<div class="progress">
							  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete</span>
							  </div>
							</div>

						  </div><!--/panel-body-->
					  </div><!--/panel-->
			
					  <hr>              
		   
					</div><!--/col-->
					  
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">
								<h4>Post Request</h4>
								</div>
							</div>
							<div class="panel-body">

							  <form class="form form-vertical">
							   <div class="col-md-6">
								<div class="control-group">
								  <label>Name</label>
								  <div class="controls">
								   <input class="form-control" placeholder="Enter Name" type="text">
								  </div>
								</div>      
								
								<div class="control-group">
								  <label>Message</label>
								  <div class="controls">
									<textarea class="form-control"></textarea>
								  </div>
								</div> 
									 
								<div class="control-group">
								  <label>Category</label>
								  <div class="controls">
									 <select class="form-control"><option selected="selected">options</option></select>
								  </div>
								  </div>
								</div>    
								
								<div class="control-group">
									<label></label>
									<div class="controls">
									<button type="submit" class="btn btn-primary">
									  Post
									</button>
									</div>
								</div>   
								
							  </form>
						
						
						  </div><!--/panel content-->
						</div><!--/panel-->
					  
					</div><!--/col-span-6-->
			 
			  </div><!--/row-->
			</div><!--/col-span-9-->
		</div>
		</div>
		<!-- /Main -->

		<footer class="text-center"> Aigoo Cafe</footer>

		<div class="modal" id="addWidgetModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Add Widget</h4>
			  </div>
			  <div class="modal-body">
				<p>Add a widget stuff here..</p>
			  </div>
			  <div class="modal-footer">
				<a href="#" data-dismiss="modal" class="btn">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dalog -->
		</div><!-- /.modal -->
        
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