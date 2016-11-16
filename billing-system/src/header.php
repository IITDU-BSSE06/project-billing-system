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
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="faq.php">FAQ</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
					if(isset($_SESSION["email"])) {
						echo '<i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>';
                        require ('db_config.php');
                        $user_email = $_SESSION["email"];
                        $sql = "SELECT user_name from user WHERE user_email = '$user_email'";
                        $res = $conn->query($sql)->fetch_assoc();
                        $name = $res["user_name"];
                        echo "<a href='user_profile.php'> $name </a>";
                        mysqli_close($conn);
						echo '<button onclick="location.href=\'sign_out.php\'" type="submit" class="btn btn-primary" id="sign_out">Sign out
						</button>';
					}
					else {
						echo '<button onclick="location.href=\'signin.php\'" type="submit" class="btn btn-primary" id="sign_inTop">
						Sign in
						</button>
						<button onclick="location.href=\'registration.php\'" type="submit" class="btn btn-primary"
								id="sign_upTop">Sign up
						</button>';
					}
				?>

			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>