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
	<link rel="icon"
		  type="image/jpg"
		  href="icon.jpg">
	<title>Home</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
		  integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous"></script>

</head>


<body>
<div style="width: 1200px; margin: 0 auto;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php">Billing System</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<button onclick="location.href='index.php'" type="submit" class="btn btn-primary" id="sign_upTop">
						Sign out
					</button>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row" style="height: 550px;">
		<div class="col-sm-2" style=" border-right: 1px solid #BBCDBC;">
			<h2>Home Menu</h2>
			<p></p>
			<ul>
				<li><a href="home.php" style="color: #8C6623;">Home</a></li>
				<li><a href="create_bill.php" style="color: #8C6623;">Create a new bill</a></li>
				<li><a href="user_statistics.php" style="color: #8C6623;">My Statistics</a></li>
				<li><a href="user_submissions.php" style="color: #8C6623;">My Submissions</a></li>
				<li><a href="notifications.php" style="color: #8C6623;">Notifications</a></li>
				<?php
				if($_SESSION["admin"] == 1) {
					echo "<li><a href=\"add_category.php\" style=\"color: #8C6623;\">Add Category</a></li>
					<li><a href=\"promote_user.php\" style=\"color: #8C6623;\">Promote User</a></li>
					<li><a href=\"demote_user.php\" style=\"color: #8C6623;\">Demote User</a></li>";
				}
				?>
			</ul>
		</div>
		<div class="col-sm-7" style=" border-right: 1px solid #BBCDBC;">
			<h2 style="color: #4D574E;">Home</h2>
			<p>Coming soon!</p>
		</div>
		<div class="col-sm-3">
			<p>Ticker</p>
		</div>
	</div>
	<div class="footer">
		<p style="text-align: center;">Copyright &copy;2016 by Institute of Information Technology</p>
		<p style="text-align: center;">University of Dhaka</p>
	</div>
</body>
</html>