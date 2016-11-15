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
	<title>My Submissions</title>
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
					<a href="#"><?php echo $_SESSION["email"]; ?></a>
					<button onclick="location.href='index.php'" type="submit" class="btn btn-primary" id="sign_outTop">
						Sign out
					</button>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row" style="height: 550px;">
		<div class="col-sm-2">
			<h2>Home Menu</h2>
			<table class="table">
				<tbody>
				<tr>
					<td><a href="home.php" style="color: #8C6623;">Home</a></td>
				</tr>
				<tr>
					<td><a href="create_bill.php" style="color: #8C6623;">Create a new bill</a></td>
				</tr>
				<tr>
					<td><a href="user_statistics.php" style="color: #8C6623;">My Statistics</a></td>
				</tr>
				<tr>
					<td><a href="user_submissions.php" style="color: #8C6623;">My Submissions</a></td>
				</tr>
				<tr>
					<td><a href="notifications.php" style="color: #8C6623;">Notifications</a></td>
				</tr>
				<?php
				if ($_SESSION["admin"] == 1) {
					echo "<tr>
					<td><a href=\"add_category.php\" style=\"color: #8C6623;\">Add Category</a></td>
				</tr>
				<tr>
					<td><a href=\"promote_user.php\" style=\"color: #8C6623;\">Promote User</a></td>
				</tr>
				<tr>
					<td><a href=\"demote_user.php\" style=\"color: #8C6623;\">Demote User</a></td>
				</tr>";
				}
				?>
				</tbody>
			</table>
		</div>
		<div class="col-sm-7" style=" border-right: 1px solid #BBCDBC; border-left: 1px solid #BBCDBC;">
			<h2 style="color: #4D574E; text-align: center">My submissions</h2>
			<p style="text-align: center">Submission history for <?php echo $_SESSION['email'];?></p>
			<table class="table table-bordered" id="table">
				<thead>
				<tr>
					<th style="text-align: center;">Bill Name</th>
					<th style="text-align: center;">Submission Time</th>
					<th style="text-align: center;">Coordinator Verdict</th>
					<th style="text-align: center;">Director Verdict</th>
				</tr>
				</thead>
				<tbody id="tbody">
				<?php
				$servername = "localhost";
				$username = "ahqmrf";
				$password = "T7eHwuQrzcD6CMUT";
				$dbname = "billing_system";
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$user_email = $_SESSION["email"];
				$res = $conn->query("SELECT user_id FROM user WHERE user_email='$user_email'")->fetch_assoc();
				$user_id = $res["user_id"];
				$sql = "SELECT bill_id, bill_time, bill_name, coordinator_decision, director_decision FROM bill WHERE user_id='$user_id'";
				$result = $conn->query($sql);

				while ($row = $result->fetch_assoc()) {
					$bill_name = $row["bill_name"];
					$bill_time = $row["bill_time"];
					$coordinator_decision = $row["coordinator_decision"];
					$director_decision = $row["director_decision"];
					echo
					"<script>
						var row = document.createElement('TR');
						var col = document.createElement('TD');
						col.innerHTML = '$bill_name';
						col.style.textAlign='center';
						row.append(col);
						
						var col = document.createElement('TD');
						col.innerHTML = '$bill_time';
						col.style.textAlign='center';
						row.append(col);
						
						var col = document.createElement('TD');
						col.innerHTML = '$coordinator_decision'  == 1? 'Accepted' : 'Pending';
						col.style.textAlign='center';
						col.style.color = '$coordinator_decision'  == 1?  '#4cae4c' : '#8C6623';
						row.append(col);
						
						var col = document.createElement('TD');
						col.innerHTML = '$director_decision' == 1? 'Accepted' : 'Pending';
						col.style.textAlign='center';
						col.style.color = '$director_decision'  == 1?  '#4cae4c' : '#8C6623';
						row.append(col);
						document.getElementById('tbody').append(row);
					</script>";
				}
				mysqli_close($conn);
				?>
				</tbody>
			</table>
		</div>
		<div class="col-sm-3">
			<h2 style="color: #4D574E; ">Recent bills</h2>
			<table class="table">
				<tbody id="table2">
				<?php
				$servername = "localhost";
				$username = "ahqmrf";
				$password = "T7eHwuQrzcD6CMUT";
				$dbname = "billing_system";
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT user_name, bill_name FROM submission";
				$result = $conn->query($sql);

				while ($row = $result->fetch_assoc()) {
					$user_name = $row["user_name"];
					$bill_name = $row["bill_name"];
					$text = $user_name . " created a bill on " . $bill_name;
					echo
					"<script>
						var row = document.createElement('TR');
						var col = document.createElement('TD');
						col.innerHTML = '$text';
						col.style.color='#3F6060';
						row.append(col);
						document.getElementById('table2').append(row);
					</script>";
				}
				mysqli_close($conn);
				?>
				</tbody>
			</table>
			<a href="recent_bills.php" style="float: right;">See more...</a>
		</div>
	</div>
	<div class="footer">
		<p style="text-align: center;">Copyright &copy;2016 by Institute of Information Technology</p>
		<p style="text-align: center;">University of Dhaka</p>
	</div>
</body>
</html>