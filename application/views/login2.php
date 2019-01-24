<!doctype html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>Document</title>
</head>
<body>
 <div class="container">
	 <form method="post" action="<?php echo base_url();?>main/login_validation">

		 <div class="form-group">
			 <label>Username</label>
			 <input type="username" name="username" class="form-control"/>
			 <span class="text-danger"><?php echo form_error('username');?></span>
		 </div>
		 <div class="form-group">
			 <label>Password</label>
			 <input type="password " name="password" class="form-control"/>
			 <span class="text-danger"><?php echo form_error('password');?></span>
		 </div>
		 <div class="form-group">
<!--			 <input type="submit " name="insert" value="Login" class="btn btn-info"/>-->
			 <button type="submit" name="insert" value="Login" class="btn btn-default">Submit</button>
		 <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>
		 </div>

	 </form>
 </div>
</body>
</html>
