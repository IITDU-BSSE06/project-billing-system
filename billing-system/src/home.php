<?php
session_start();
if (isset($_SESSION['email'])) {

} else {
	echo '<script type="text/javascript">location.href = "access_denied.php";</script>';
}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include('include.php');?>
	<title>Home</title>
</head>


<body>
<div style="width: 1200px; margin: 0 auto;">
	<?php
	include ('header.php');
	?>
	<div class="row" style="height: 550px;">
		<?php include('home_menu.php') ?>
		<div class="col-sm-7" style=" border-left: 1px solid #BBCDBC; border-right: 1px solid #BBCDBC; min-height: 550px;">
			<h2 style="color: #4D574E;">Home</h2>
			<p>Coming soon!</p>
		</div>
		<div class="col-sm-3">
			<?php
			include ('show_recent_bills.php');
			?>
		</div>
	</div>
	<?php include ('footer.php');?>
</body>
</html>