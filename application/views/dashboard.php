<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />

    <title>PMS|Software</title>
	  <link rel="stylesheet"  type="image/png" href="<?php echo base_url(); ?>assets/icon.png">
	  <!-- Bootstrap core CSS -->
	  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js">
	  <link rel="stylesheet"  href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>
<!-- Main Body -->
  <body>

    <!-- Menu Bar -->
     <!--/.nav-collapse -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="#about">Create Option</a></li>
            <li><a href="#contact">Inventory</a></li>
            <li><a href="#contact">Sales</a></li>
            <li><a href="#contact">Accounting</a></li>
            <li><a href="#contact">Create User</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#">Welcome</a></li>
            <li><a href="<?php echo base_url(); ?>main/logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/.nav End -->

    <header id="header">
      <div class="container">
        <div class="col-md-10">
          <h1>
            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            Dashboard <small>Pharmacy Management Software</small>
          </h1>
        </div>
       </div>
      </div>
    </header>

 
 <!-- /.container -->
   <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Inventory Overview</h3>
      </div>
      <div class="panel-body">
       <div class="col-md-3">
         <div class="well dash-box">
           <h2> <span class="glyphicon glyphicon-th" aria-hidden="true"></span>10</h2>
          <h4>Medicine Qty</h4>
          </div>
      </div>
      <div class="col-md-3">
          <div class="well dash-box">
            <h2> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>10</h2>
           <h4>Product Qty</h4>
           </div>
       </div>
       <div class="col-md-3">
          <div class="well dash-box">
            <h2> <span class="glyphicon glyphicon-btc" aria-hidden="true"></span>12</h2>
           <h4>Sales</h4>
           </div>
       </div>
       <div class="col-md-3">
          <div class="well dash-box">
            <h2> <span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span>15</h2>
           <h4>Stock</h4>
           </div>
       </div>
    </div>
   </div>
    
    <!-- /.Footer -->
   <footer id="footer" navbar navbar-fixed-bottom>
      <footer id="footer" class="">
     <p>Copyright B.M.ASHIK MAHMUD, &copy; 2019  </p>
   </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="../../assets/js/vendor/jquery.min.js"><\/script>'
        );
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
