<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>PMS|Login</title>

	  <link rel="stylesheet"  type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
    <!-- Bootstrap core CSS -->
	  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.html">Pharmacy Management Software</a></li>
          </ul>
          
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
      <div class="container">
        <div class="col-md-10">
          <h1 class="text-center">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
           Account Login <small>Pharmacy Management Software</small>
          </h1>
        </div>
       </div>
      </div>
    </header>

 
    <!-- /.container -->
   <section id="main">
       <div class="row">
           <div class="col-md-4 col-md-offset-4">
			   <form method="post" class="well" action="<?php echo base_url();?>main/login_validation">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <!--<input type="username" class="form-control" id="email">-->
						<input type="username" name="username" class="form-control"/>
						<span class="text-danger"><?php echo form_error('username');?></span>
                    </div>
                    <div class="form-group">
                      <label for="password">Password:</label>
                      <!--<input type="password" class="form-control" id="password">-->
				<!--<input type="password " name="password" id="password" class="form-control"/>-->
						<input class="form-control" name="password" id="password" type="password"/>
						<span class="text-danger"><?php echo form_error('password');?></span>
                    </div>
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
				   <button type="submit" name="insert" value="Login" class="btn btn-default">Submit</button>
				   <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
                  </form>
           </div>
       </div>
   </section>
    
    <!-- /.Footer -->
   <footer id="footer" navbar navbar-fixed-bottom>
      <!--<footer id="footer" class="">-->
     <p>Copyright B.M.ASHIK MAHMUD, &copy; 2019  </p>
   </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
