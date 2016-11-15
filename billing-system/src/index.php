<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" 
      type="image/jpg" 
      href="icon.jpg">
  <title>Billing System</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script>
  var emailID;
    function validateEmail(email) {
      var status = document.getElementById('emailStatus');
      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){ 
        status.innerHTML = "";
        return (true)  
      }  
      status.innerHTML = "Invalid email address";
      return (false) 
    }
    function validateForm() {
      var myForm = document.getElementById('form');
      var x = document.forms["signUpForm"]["username"].value;
      var status = document.getElementById('usernameStatus');
      if(x === "") {
        status.innerHTML = "This field cannot be empty";
        myForm.action = "";
        return false;
      }
      status.innerHTML = "";
      var email = document.forms["signUpForm"]["email"].value;
      if(validateEmail(email)){}
      else {
        myForm.action = "";
        return false;
      }
      var z = document.forms["signUpForm"]["pwd"].value;
      status = document.getElementById('passwordStatus');
      if(z === "" || z.length < 6) {
        status.innerHTML = "Password must be at least 6 characters long";
        myForm.action = "";
        return false;
      }

      var y = document.forms["signUpForm"]["confirm_pwd"].value;
      status.innerHTML = "";
      status = document.getElementById('confirmPasswordStatus');
      if(z === y) {}
      else {
        status.innerHTML = "Passwords do not match.";
        myForm.action = "";
        return false;
      }
      myForm.action = "account_verification.php";
      emailID = email;
      return true;
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
        <li><a href="registration.php">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <button onclick="location.href='signin.php'" type="submit" class="btn btn-primary" id="sign_inTop">Sign in</button>
        <button onclick="location.href='registration.php'" type="submit" class="btn btn-primary" id="sign_upTop">Sign up</button>
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
<div class="col-sm-4">
<div>
  <form id="form" name="signUpForm" action="account_verification.php" onsubmit="return validateForm()" method="post">
    <div>
      <h2>Sign Up for Billing System</h2>
      <p></br></p>
      <div class="form-group">
        <label for="first_name">Name:</label>
        <input name="username" type="text" class="form-control" id="username" placeholder="Enter your name">
        <span id="usernameStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="someone@example.com">
        <span id="emailStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="designation">Designation:</label>
        <select class="form-control" name="designation">
          <option value="lecturer">Lecturer</option>
          <option value="assistantProfessor">Assistant Professor</option>
          <option value="associateProfessor">Associate Professor</option>
          <option value="professor">Professor</option>
          <option value="director">Director</option>
        </select>
      </div>

      <div class="form-group">
        <label for="pwd">Password:</label>
        <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter your password">
        <span id="passwordStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="confirm_pwd">Confirm password:</label>
        <input type="password" class="form-control" id="confirm_pwd" placeholder="Retype your password">
        <span id="confirmPasswordStatus" class="text-danger"></span>
      </div>

      <button type="submit" class="btn btn-primary" id="sign_up">Sign up for Billing System</button>
    </div>
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