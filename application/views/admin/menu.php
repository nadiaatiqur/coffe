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
				   
					  <hr>              
		   
					</div>

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
                	<a href="<?php echo base_url('index.php/Welcome/menu_tambah'); ?>" class="btn btn-success">Tambah Makanan</a>
                	<a href="<?php echo base_url('index.php/Welcome/tambah_minuman'); ?>" class="btn btn-warning">Tambah Minuman</a>
                </p>
                 <div class="col-md-8">

                <table border="1" class="table table-striped table-bordered">
                      <thead>
                     	<tr>
                     	  <th width="25px">No.</th>
                     	  <th width="100px">Makanan</th>
                     	  <th width="200px">Harga Makanan</th>
                          <th width="100px">Minuman</th>
                          <th width="200px">Harga Minuman</th>
                          <th width="50px">Gambar Makanan</th>
                          <th width="50px">Gambar Minuman</th>
                          <th width="200px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php
								$i=1;
								foreach ($menu as $m) {
							?> 
							<tr>
								<td><?php echo $i;  ?></td>
								<td><?php echo $m->makanan ; ?></td>
								<td><?php echo $m->harga_makanan; ?></td>
								<td><?php echo $m->minuman; ?></td>
								<td><?php echo $m->harga_minuman; ?></td>
								<td><?php echo $m->gambar_makanan; ?></td>
								<td><?php echo $m->gambar_minuman; ?></td>

							<td>
								<a href="<?php echo base_url('index.php/Welcome/edit_menu/'.$m->id) ; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
								<a href="<?php echo base_url('index.php/Welcome/hapus_menu/'.$m->id) ; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
							</tr>
							<?php $i++; } ?>
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