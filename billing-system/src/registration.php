<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script>

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
      var x = document.forms["signUpForm"]["first_name"].value;
      var status = document.getElementById('firstNameStatus');
      if(x === "") {
        status.innerHTML = "This field cannot be empty";
        return false;
      }
      status.innerHTML = "";
      x = document.forms["signUpForm"]["last_name"].value;
      status = document.getElementById('lastNameStatus');
      if(x === "") {
        status.innerHTML = "This field cannot be empty";
        return false;
      }
      status.innerHTML = "";
      x = document.forms["signUpForm"]["username"].value;
      status = document.getElementById('usernameStatus');
      if(x === "" || x.length < 6) {
        status.innerHTML = "Username must be at least 6 characters long";
        return false;
      }
      status.innerHTML = "";
      if(/^[a-zA-Z]+$/.test(x)) {}
      else {
        status.innerHTML="Username can contain only alphabets";
        return false;
      }

      status.innerHTML = "";
      var email = document.forms["signUpForm"]["email"].value;
      if(validateEmail(email)){}
      else {
        return false;
      }
      var z = document.forms["signUpForm"]["pwd"].value;
      status = document.getElementById('passwordStatus');
      if(z === "" || z.length < 6) {
        status.innerHTML = "Password must be at least 6 characters long";
        return false;
      }

      var y = document.forms["signUpForm"]["confirm_pwd"].value;
      status.innerHTML = "";
      status = document.getElementById('confirmPasswordStatus');
      if(z === y) {}
      else {
        status.innerHTML = "Passwords do not match.";
        return false;
      }
      
      return true;
    }
  </script>
</head>


<body>
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <form name="signUpForm" action="www.google.com" onsubmit="return validateForm()" method="post">
    <div class="col-sm-5 col-sm-offset-5">
      <h2>Sign Up for Billing System</h2>
      <p></br></p>
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter your first name">
        <span id="firstNameStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" placeholder="Enter your last name">
        <span id="lastNameStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Username">
        <span id="usernameStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="someone@example.com">
        <span id="emailStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter your password">
        <span id="passwordStatus" class="text-danger"></span>
      </div>

      <div class="form-group">
        <label for="confirm_pwd">Confirm password:</label>
        <input type="password" class="form-control" id="confirm_pwd" placeholder="Retype your password">
        <span id="confirmPasswordStatus" class="text-danger"></span>
      </div>

      <button type="submit" class="btn btn-default" id="sign_up">Sign Up</button>
    </div>
  </form>
</div>
</body>
</html>