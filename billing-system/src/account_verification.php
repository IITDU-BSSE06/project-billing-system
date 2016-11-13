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
      <div>
        <p id="msg">A verification code has been sent to <?php echo $_POST["email"]; ?></p>
        <?php
        $to = $_POST["email"];
        $subject = "Welcome";
        $code = md5(uniqid(rand(), true));
        $txt = "Your username is " . $_POST["username"] . " and your verification code is " . $code;
        $headers = "From: billingsystem@iitdu.com" . "\r\n" .
            "CC: boss@ylw.com";

        $send = mail($to,$subject,$txt,$headers);
        ?>
        <label for="first_name">Enter the verification code:</label>
        <input type="text" class="form-control" id="code" placeholder="Code">
        <button type="submit" class="btn btn-primary" id="submitVerification">Sign me in</button>
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