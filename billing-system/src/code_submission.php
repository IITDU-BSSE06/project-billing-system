<!DOCTYPE html>
<html>
<head>
    <title>Verify Account</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function hell() {
            document.getElementById('msg').style.color="#22C145";
        }
    </script>

</head>


<body>
<div style="width: 1200px; margin: 0 auto;">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <button type="submit" class="btn btn-primary" id="sign_inTop">Sign in</button>
                    <button type="submit" class="btn btn-primary" id="sign_upTop">Sign up</button>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-sm-7" style="background-image: url('back.jpg'); height: 550px;">
            <h2>Billing System</h2>
            <p style="font-size: 20px; color: #190033;">Billing System is a private web application for the users of Institute of Information Technology</p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-4" >
            <div style="vertical-align: middle;">
                <p></p>
                <p></p>
                <p id="msg" style="font-size: 30px; color: #FF335E; ">
                    <?php
                    $servername = "localhost";
                    $username = "ahqmrf";
                    $password = "T7eHwuQrzcD6CMUT";
                    $dbname = "test";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT code FROM verification";
                    $result = $conn->query($sql);
                    $ok = true;
                    while($row = $result->fetch_assoc()) {
                        if($row["code"] == $_POST["code"]) {
                            $ok = false;
                            $sql = "TRUNCATE TABLE verification";
                            $conn->query($sql);
                            echo '<script type="text/javascript"> hell(); </script>';
                            echo "Congratulations! Your account has been created successfully. You can sign in now with your email and password.";
                            break;
                        }
                    }
                    if($ok) {
                        echo "The verification code you entered was wrong.";
                    }
                    mysqli_close($conn);
                    ?>
                </p>
                <h2 id="header">Why a verification code is needed?</h2>
                <p id="description">Because this verification code confirms that the user is a human, not a bot. Bot is a software that signs up an online account, and some people misuse it to produce a massive amount of acounts in a very short time. So basicaly the verification code is all about confirmation that you are a human</p>
                <p>We strongly recommend you to enter the verification code going to the previous page again if you did not enter the code correctly.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer">
    <p style="text-align: center;">Copyright &copy;2016 by Institute of Information Technology</p>
    <p style="text-align: center;">University of Dhaka</p>
</div>
</body>
</html>