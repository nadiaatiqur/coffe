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
					  
				<!--<table border=0 class=datatable width=800px cellpadding=0 cellspacing=0 align=center>
		<tr>
			<td align=center><b><h3>Menu</h3></b></td>
		</tr>

		
		<tr valign=top>
			<td>
				<table class=table border=1 width=100%>
					<tr class=th>
						<th>Menu</th>
						<th width=150px>Harga (Rp)</th>
						<th width=200px>Setting</th>
					</tr>
				</table>
			</td>
		</tr>
		`
						</table>

								<table border="1" class="table table-bordered">
									<thead>
										<tr class="danger">
											<td>No</td>
											<td>Id</td>
											<td>Nama</td>
											<td>Alamat</td>
											<td>Status</td>
										</tr>
									</thead>
									<tbody>


<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			
			<th>
				<td>Menu</td>
				<td>:</td>
				<td><input type="text" name="menu" size="30" required></td>
			</th>
			<th>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="menu" size="30" required></td>
			</th>
			
			<th>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</th>
		</table>
	</form>
</body>
</html>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<script type="text/javascript" src="http://code.jQuery.com/jQuery-1.7.2.min.js"></script>
	<script type="text/javascript" src="functions.js"></script>
</head>
<body>
	<form id="frmCadastre">
		<ul>
			<li>
				<label for="txtID">ID:</label>
				<input type="text" id="txtID"/>
			</li>
			<li>
				<label for="txtName">Name:</label>
				<input type="text" id="txtName"/>
			</li>
			<li>
				<label for="txtPhone">Phone:</label>
				<input type="text" id="txtPhone"/>
			</li>
			<li>
				<label for="txtEmail">Email:</label>
				<input type="text" id="txtEmail"/>
			</li>
			<li>
				<input type="submit" value="Save" id="btnSave"/>
			</li>
		</ul>
	</form>

	<table id="tblList">

	</table>
</body>
</html>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Menu</h3>
            </div>
            <div class="row">
                <p>
                	<a href="data/add" class="btn btn-danger">Tambah Menu</a>
                    <!--<a href="create.php" class="btn btn-success">Create</a>-->
                </p>
                 <div class="col-md-8">
                <table border="1" class="table table-striped table-bordered">
                      <thead>
                     	<tr>
                     	  <th width=25px>No.</th>
                     	  <th width=100px>Foto</th>
                          <th >Menu</th>
                          <th width=100px>Harga</th>
                          <th width=123px>Aksi</th>
                        </tr>
                        <tr>
                        	<th></th>
                        	<th></th>
                        	<th></th>
                        	<th></th>
                        	<th> &nbsp
                        	<a href="#" class="btn btn-success">
                      			<i class="glyphicon glyphicon-pencil"></i>
                      			</a>
                      		<a href="#" class="btn btn-primary">
                      				<i class="glyphicon glyphicon-trash"></i>
                      			</a>
                      		</th>
                        </tr>
                      </thead>
                      <tbody>
                      		  
                      </tbody>
                </table>
                </div>
        </div>
    </div> <!-- /container -->
  </body>
</html>


									</tbody>
								</table>
								
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