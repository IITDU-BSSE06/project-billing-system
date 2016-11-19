<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/body.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/bootstrap/bootstrap-theme.min.css.map" rel="stylesheet">

    <script src="../js/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="../js/jquery/jquery.PrintArea.js" type="text/javascript"></script>
    <script src="../js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div style="width: 1200px; margin: 0 auto;">
    <?php
    include_once ('header.php');
    ?>

    <div style="height: 560px">
        <h3>FAQ about this webservice</h3>
        <div>
            <div class="row" style="min-height: 50px">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info" data-toggle="collapse"  data-target="#registration">Registration</button>
                </div>
                <div id="registration" class="collapse col-sm-8">
                    <p><strong>Name </strong>First need to Enter User Name</p>
                    <p><strong>Email </strong>User Email Address</p>
                    <p><strong>Designation </strong>User Designation</p>
                    <p><strong>Password </strong>Password and Confirm Password</p>
                    <p><strong>Registration </strong> will be not completed until verification code submitted</p>
                </div><br>
            </div>
            <div class="row" style="min-height: 50px">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info" data-toggle="collapse"  data-target="#sign_in">Sign In</button>
                </div>
                <div id="sign_in" class="collapse col-sm-8">
                    <p><strong>Email </strong>address and <strong>password</strong> to sign in</p>
                </div><br>
            </div>
            <div class="row" style="min-height: 50px">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info" data-toggle="collapse"  data-target="#program">Program Creation</button>
                </div>
                <div id="program" class="collapse col-sm-8">
                    <p>To create a program Admin inset Program Name</p>
                    <p>Program Criteria of a program, Program category with evaluation formula</p>
                </div><br>
            </div>
            <div class="row" style="min-height: 50px">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info" data-toggle="collapse"  data-target="#bill">Bill</button>
                </div>
                <div id="bill" class="collapse col-sm-8">
                    <p>To create a bill user first select the program which bill will be generated</p>
                    <p>Program bill table will be generated based on program criteria and category</p>
                    <p>In Program field user insert value, field value will be calculate automatically</p>
                </div><br>
            </div>
        </div>

    </div>
    <?php
    include_once ('footer.php');
    ?>
</div>
</body>
</html>