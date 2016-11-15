<?php
session_start();
if ($_POST['email'] == "") {
	echo '<script type="text/javascript">location.href = "registration.php";</script>';
}

if (isset($_SESSION['email'])) {
	echo '<script type="text/javascript">location.href = "home.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"
		  type="image/jpg"
		  href="icon.jpg">
	<title>Verify Account</title>
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
				<a class="navbar-brand" href="registration.php">Billing System</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="registration.php">Home</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<button onclick="location.href='signin.php'" type="submit" class="btn btn-primary" id="sign_inTop">
						Sign in
					</button>
					<button onclick="location.href='registration.php'" type="submit" class="btn btn-primary"
							id="sign_upTop">Sign up
					</button>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row">
		<div class="col-sm-7" style="background-image: url('back.jpg'); height: 550px;">
			<h2>Billing System</h2>
			<p style="font-size: 20px; color: #190033;">Billing System is a private web application for the users of
				Institute of Information Technology</p>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-4">
			<div>
				<p id="msg">A verification code has been sent to <?php echo $_POST["email"]; ?></p>
				<?php
				$to = $_POST["email"];
				$subject = "Verify Account";
				$code = md5(uniqid(rand(), true));
				$txt = "Thank you for signing up in Billing System. Your account verification code is " . $code;
				$headers = "From: billingsystem@iitdu.com";

				$send = mail($to, $subject, $txt, $headers);

				$servername = "localhost";
				$username = "ahqmrf";
				$password = "T7eHwuQrzcD6CMUT";
				$dbname = "billing_system";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$username = $_POST["username"];
				$email = $_POST["email"];
				$designation = $_POST["designation"];
				$password = $_POST["password"];
				$_SESSION["reg_email"] = $email;
				$sql = "INSERT INTO user (user_name, user_email, user_designation, user_password, user_verification, user_activation) 
    VALUES ('$username' , '$email', '$designation', '$password', '$code', 0)";
				$conn->query($sql);
				mysqli_close($conn);
				?>
				<label for="first_name">Enter the verification code:</label>
				<form action="code_submission.php" method="post">
					<input type="text" class="form-control" name="code" placeholder="Code">
					<button type="submit" class="btn btn-primary" id="submitVerification"
							onclick="location.href = 'code_submission.php';">Sign me in
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="footer">
	<p style="text-align: center;">Copyright &copy;2016 by Institute of Information Technology</br>
		University of Dhaka</p>
</div>
</body>
</html>