<?php
if($page == 'admin')
{
	$bgcolor = '#e74c3c';
}
elseif($page == 'contributor')
{
	$bgcolor = '#8e44ad';
}
elseif($page == 'user')
{
	$bgcolor = '#2980b9';
}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
</head>
	<body style="background:<?php echo $bgcolor;?>">
			<div class="col-md-4 col-md-offset-4" style="margin-top:15%">
				<div class="panel panel-default">
					<h3 align="center">Hello, <?php echo $username;?>! <button type="button" class="btn btn-info btn-sm" onclick="window.location='<?php echo base_url("login/keluar");?>'">Logout</button></h3>
				</div>
			</div>
	</body>
</html>