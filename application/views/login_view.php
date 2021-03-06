<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/custom.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/js/jquery-ui/jquery-ui.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/style.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'asset/js/jquery-ui/jquery-ui.js' ?>"></script>
</head>
<body>
	
	<div id="container">
	<div class="col-md-4 col-md-offset-4 kotak-login">
		<div class="panel panel-success">
			<div class="panel-heading">
				Login admin
			</div>
			<div class="panel-body">
			<?php echo form_open('login/cek') ?>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div>
				<br/>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
				</div>
				<br/>
				<input type="submit" name="submit" value="Log In" class="btn btn-sm btn-primary">
			   </form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>