<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/login.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600'); ?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'); ?>">
  <script src="<?php echo base_url('asset/js/login.js'); ?>"></script>
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#admin">ADMIN</a></li>
      </ul>
      
      <div class="tab">
        <div id="admin">    
          <h1>Daebak Cafe</h1>
          
          <form action="<?php echo base_url('index.php/Login/login/aksi_login'); ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" />
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" />
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
