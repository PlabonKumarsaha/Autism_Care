<!DOCTYPE html>
<html lang="en">
<script>
</script>




<?php
    session_start();
    if(isset($_SESSION['doctorName'])){
    
   $doctorID= $_SESSION['doctorID'];
    $doctorName = $_SESSION['doctorName'];
    include_once '../connection/dbConnect.php';
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:../index.php");
        }
?>

<head>
    <meta charset="UTF-8">
    <title>Doctors Portal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">


        <div class="left">
            <div class="imageSection">
                <img class="doctorImage" name="doctorImage" src="doctor_image.jpg" alt="doctor" height="150px" width="150px">
                <div class="doctorName" name="doctorImage">
                    <?php echo $doctorName ;?>
                </div>
            </div>
            <div>
                <hr>
            </div>
            <br>

            <br>

            <div class="buttonSection">
                <a href="doctorPortal.php" class="appointments" name="appoinments">Appoinments</a>
                <a href="myPatient.php" class="myPatients" name="myPatients">My Paitients</a>
                <a href="doctorChat.php" class="chat" name="chat">Chat</a>
                <a href="doctorSetAppointments.php" class="setApp" name="setApp">Set Apppointments</a>
                <form method="post">
                    <input type="submit" name="logout" value="Logout" class="btn btn-danger" id="logout">
                </form>
            </div>

        </div>
        <div class="right">
            <form method="post">

            </form>
        </div>
    </div>
    <?php }
                
                else{
                    header("location:../UserRegistration/userLogin.php");
                }
                ?>
</body>

</html>