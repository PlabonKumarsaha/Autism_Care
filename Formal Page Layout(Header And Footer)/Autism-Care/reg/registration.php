<!DOCTYPE html>
<html lang="en">

<head>
    <link href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <meta charset="UTF-8">
    <title>Register Now</title>
</head>
<?php
    $fname="";
    $lname="";
    $email="";
    $pass="";
    $confirmPass="";
    $phone="";
    $gender="";
    $date="";
    
    
    $errFname="";
    $errLname="";
    $errEmail="";
    $errPass="";
    $errConfirmPass="";
    $errPhone="";
    $errGender="";
    $errDate="";
    
    if(isset($_POST['submit']))
			{
                    if(empty($_POST["fname"]))
{
$errFname="Please Type your first name";
}
else
{
if(empty($_POST["lname"]))
{
$errLname="Please Type your last name";
}
else
{
if(empty($_POST["email"]))
{
$errEmail="Please Type your Email adress";
}
else if(!preg_match("/^[a-zA-Z ]*$/", $_POST["email"]))
{
$errEmail = "Please enter a valid email adress";
}
else
{
if(empty($_POST["password"]))
{
$errPass="Please Type Password";
}
else
{
if(empty($_POST["confirmpass"]))
{
$errConfirmPass="Please Type your password again";
}
else if($_POST["password"] != $_POST["confirmpass"])
{
$errPass = "Password didn't match";
}
else
{
if(empty($_POST["phone"]))
{
$errPhone="Please Type your Phone Number";
}
else
{
if(empty($_POST["gender"]))
{
$errGender="Please Enter your gender";
}
else
{
$fname= $_POST["fname"]; 
$lname= $_POST["lname"];
$email= $_POST["email"];
$pass= $_POST["password"];
$confirmPass= $_POST["confirmpass"];
$date= $_POST["dob"];
$phone= $_POST["phone"];
$gender= $_POST["gender"];
}
}
}
}
}
}
}
             }
    
    
    ?>

<body>
    <div class="container">
        <form method="post" class="form-horizontal" role="form">
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">*First Name</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" name="fname" placeholder="First Name" class="form-control" autofocus>
                    <?php 
                if(!empty($errFname))
                {
            ?>
                    <span style="color:red;"><?php echo $errFname; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">*Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    <?php 
                if(!empty($errLname))
                {
            ?>
                    <span style="color:red;"><?php echo $errLname; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">*Email </label>
                <div class="col-sm-9">
                    <input type="text" id="email" name="email" placeholder="Email" class="form-control" name="email">
                    <?php 
                if(!empty($errEmail))
                {
            ?>
                    <span style="color:red;"><?php echo $errEmail; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">*Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                    <?php 
                if(!empty($errPass))
                {
            ?>
                    <span style="color:red;"><?php echo $errPass; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">*Confirm Password*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" name="confirmpass" placeholder="Password" class="form-control">
                    <?php 
                if(!empty($errConfirmPass))
                {
            ?>
                    <span style="color:red;"><?php echo $errConfirmPass; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">*Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate" name="dob" class="form-control">
                    <?php 
                if(!empty($errDate))
                {
            ?>
                    <span style="color:red;"><?php echo $errDate; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">*Phone number </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber" name="phone" placeholder="Phone number" class="form-control">
                    <?php 
                if(!empty($errPhone))
                {
            ?>
                    <span style="color:red;"><?php echo $errPhone; ?></span>
                    <?php
                }
            ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">*Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" name="gender" value="Male">Male
                            </label>
                            <?php 
                if(!empty($errGender))
                {
            ?>
                            <span style="color:red;"><?php echo $errGender; ?></span>
                            <?php
                }
            ?>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Required fields</span>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
        </form> <!-- /form -->
    </div> <!-- ./container -->
</body>

</html>