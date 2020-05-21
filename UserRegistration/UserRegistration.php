

<?php 
session_start();
//"Data.php";
$_SESSION['err_fname'] = " ";
$_SESSION['err_lname'] = "";
$_SESSION['err_email_addr'] = " ";
$_SESSION['err_pwd'] = " ";
$_SESSION['err_phone'] = "";
$_SESSION['uimg'] ="";
 
//var_dump($_SESSION);




$_SESSION['err_fname'] = " ";
$_SESSION['err_email_addr'] = " ";
$_SESSION['err_pwd'] = " ";
$_SESSION['err_phone'] = " ";
//$_SESSION['err_nameForUImage'] ="";


//echo 'error';






$err_fname = $_SESSION['err_fname'] ;
$err_email_addr = $_SESSION['err_email_addr'];

/*$err_pwd = $_SESSION['err_pwd'];
$err_phone = $_SESSION['err_phone'];
$err_uimg = $_SESSION['uimg'];*/



?>



<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Autism Care </title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- Latest compiled and minified CSS -->

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <!-- jQuery library -->

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
           <!--for making it mobile responsive-->
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>
<body class="float-sm-md-lg-xl">

   <div class="fixed-top">
        <nav class="navbar navbar-light" style="background-color: #036889;">
           <div class="container">
                <a href="userLogin.php" class="navbar-brand font-weight-bold">
                    <img alt="human_logo" src="images/human.png" width="27" height="27"><span style="color:#FFFFFF ; font-family: Georgia, 'Times New Roman', Times, serif;"> Login | </span>
                </a>
                <a href="UserRegistration.php" class="navbar-brand font-weight-bold">
                   <span> <img alt="lock" src="images/lock.png" width="27" height="27"></span> <span style="color:#FFFFFF ; font-family: Georgia, 'Times New Roman', Times, serif;"> Register</span> 
                </a>
                <a href="../DrList/DR_List.php" class="navbar-brand"><button type="button" class="btn btn-outline-danger">Make An Appointment</button></a>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="../index.php" class="navbar-brand font-weight-bold" style="color: #121212; font-family: Georgia, 'Times New Roman', Times, serif;">Autism Care</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse text-center" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="" class="nav-link"> Doctor <span class="sr-only">(current)</span></a>
                        </li>
                      
                        <li class="nav-item active">
                            <a href="" class="nav-link"> Contact Us <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <a href="#" class="navbar-brand">
                        <img alt="human_logo" src="images/facebook.png" width="27" height="27"><span style="color: #121212; ; font-family: Georgia, 'Times New Roman', Times, serif;"> | </span>
                        <span> <img alt="lock" src="images/instagram.png" width="27" height="27"></span>
                    </a>
                </div>

            </div>
        </nav>
</div>

<br>
<br>
<br>
<br>

 <!-- form create-->

<div id="login-box">
    <div align="centar" class="left-box">
        <h4>Register on Autism Care</h4>
        <p>Create free account and ensure better healthcare for your child</p>

           <p><b> <font color="#000080">Choose your Child Image</font> </b></p>

           <form method="POST"  action = "userData.php" id="signup-form" name ="btn_personal_info" class="signup-form"  enctype="multipart/form-data">
            

           
        <input type="file" name="uimg"> </b><br> <br>
        <!-- <span style="color:red;"> <?php echo $err_uimg ?></span> -->

        <label><b>Full Name</b></label><br>

        <input type="text" name="fname" placeholder="Full Name"/><br>
        <span style="color:red;"> <?php echo $err_fname ?></span>


        <label><b>Email id</b></label><br>
        <input type="text" name="email_addr" placeholder="Email id"/><br> 
        <span style="color:red;"> <?php echo $err_email_addr ?></span>

        <label><b>Phone</b></label><br>
        <input type="text" name="phone" placeholder="Phone"/><br>
        <!-- <span style="color:red;"> <?php echo $err_phone ?></span> -->

        <label><b>Password</b></label><br>
        <input type="password" name="pwd" placeholder="Password"/><br></b><br>
        <!-- <span style="color:red;"> <?php echo $err_pwd ?></span> -->

        

        <input type="submit" name="btn_save" value="Register"/>

        
    </div>

    <div class="right-box">
        
        <img src="images/doctor.png" height="287" width="254">

        <h3><b>OH! No I am a Doctor</b></h2>
        <span><a class="registerLink" href="../DoctorRegistration/index.php">Register as a Doctor</a> </span>

    </form>
      
    </div>
   
</div>
</form>
      <!-- form end-->


       <!-- footer start -->
    <footer class="footersection-bottom-fixed" id="footerfdiv">
        <nav class="navbar navbar-light-fixed-bottom" style="background-color:green" sticky-down;>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 footer-div">
                    <div>
                        <h3>About Autism Care</h3>
                        <p>This is a footer for autism care</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 sm-2 col-12 footer-div">
                    <div>
                        <h3>NAVIGATION LINK</h3>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Home</a></li>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-12 footer-div">
                    <div>
                        <h3>About Autism Care</h3>
                        <p>This is a footer for autism care</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <!--footer ends -->

</body>
</html>