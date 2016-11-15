<?php
session_start();
if (isset($_SESSION['email'])) {
	echo '<script type="text/javascript">location.href = "home.php";</script>';
}
$servername = "localhost";
$username = "ahqmrf";
$password = "T7eHwuQrzcD6CMUT";
$dbname = "billing_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT user_email, user_password, user_activation, user_id FROM user";
$result = $conn->query($sql);
$ok = true;
while ($row = $result->fetch_assoc()) {

	if ($row["user_email"] == $_POST["email"]) {
		if ($row["user_password"] == $_POST["password"]) {
			$ok = false;
			if ($row["user_activation"] == 1) {
				$_SESSION['email'] = $row["user_email"];
				echo $row["user_id"];
				$sql = "SELECT admin_id, user_id FROM admin_panel";
				$admin_result = $conn->query($sql);
				$found = false;
				while($admin_row = $admin_result->fetch_assoc()) {
					if($admin_row["user_id"] == $row["user_id"]) {
						$found = true;
						break;
					}
				}
				if($found) {
					$_SESSION["admin"] = 1;
				}
				else {
					$_SESSION["admin"] = 0;
				}
				echo '<script type="text/javascript">location.href = "home.php";</script>';
			} else {
				echo '<script type="text/javascript">location.href = "account_verification.php";</script>';
			}
			break;
		}
	}
}
if ($ok) {
	echo '<script type="text/javascript">location.href = "invalid_username_or_pass.php";</script>';
}
mysqli_close($conn);
?>