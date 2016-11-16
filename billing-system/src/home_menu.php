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
			<td><a href="account_settings.php" style="color: #8C6623;">Account Settings</a></td>
		</tr>
		<tr>
			<td><a href="user_submissions.php" style="color: #8C6623;">My Submissions</a></td>
		</tr>
		<tr>
			<td><a href="user_profile.php" style="color: #8C6623;">My Profile</a></td>
		</tr>
		<tr>
			<td><a href="notifications.php" style="color: #8C6623;">Notifications <?php
					require ('db_config.php');
					$user_email = $_SESSION["email"];
					$res = $conn->query("SELECT user_id FROM user WHERE user_email='$user_email'")->fetch_assoc();
					$user_id = $res["user_id"];
					$sql = "SELECT info FROM notification  WHERE user_id='$user_id' AND is_seen=0";
					$result = $conn->query($sql) or die($conn->error);
					$num_rows = $result->num_rows;
					if($num_rows > 0) echo "(". $num_rows . ")";
					?></a></td>
		</tr>
		<?php
		if ($_SESSION["admin"] == 1) {
			echo "<tr>
					<td><a href=\"createProgram.php\">Create new program</a></td>
				</tr>
				<tr>
					<td><a href=\"users.php\" >Users</a></td>
				</tr>";
		}
		?>
		</tbody>
	</table>
</div>