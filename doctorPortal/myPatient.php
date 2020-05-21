<!DOCTYPE html>
<html lang="en">
<script>
</script>




<?php
    include_once '../connection/dbConnect.php';
    session_start();
    if(isset($_SESSION['doctorName'])){
    
   $doctorID= $_SESSION['doctorID'];
    $doctorName = $_SESSION['doctorName'];
    $sql = "select * from appointments where doctorID ='$doctorID'";
    $result = $conn->query($sql);
    $name = '';
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:../index.php");
        }
$date='';
$day= '';
$month = '';
$year = '';
$time = '';
$status= '';
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
        <?php

                
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc())
{
    
    $userID = $row['patientId'];
   $sqlUser = "select * from user where userID = '$userID'"; 
    $resultUser = $conn->query($sqlUser);
    if($resultUser -> num_rows >0){
                    while($rowUser = $resultUser->fetch_assoc())
                {
                $name = $rowUser["userName"];
                }
                }
                $date = $row["Date"];
                $day =explode("/", $date)[0];
                $month =explode("/", $date)[1];
                $year =explode("/", $date)[2];
                $time = $row["time"];
                $status =$row["appointmentsStatus"];
                $idApp = $row['appointmentsID'];
?>
        
    
    
    
    
    
    
    
    
             <div class="appoinments" id="app1" name="appointments1">
                    <div name="name" class="name"><?php echo $name ; ?></div>
                    <div name="date" class="date">
                        Date: <span name="date"><?php echo $day ; ?></span> <span name="month"><?php echo $month ; ?></span>&nbsp<span name="year"><?php echo $year ; ?></span> - <span name="time"> <?php echo $time ; ?></span>
                    </div>
                    <?php
                    if($status == 0){
                        
                    ?>
                        <input type="hidden" name="id" value="<?php echo $idApp; ?>">
                        <input type="submit" value="Confirm" name="confirm" class="btn btn-success">
                        <input type="submit" value="Decline" id="decline" name="decline" class="btn btn-danger">
                    <?php }?>
                    <?php
                    if($status == 1){
                    ?>
                    <input type="button" name="confirmed" value="Confirmed" class="btn btn-success">
                    <?php }?>
                    <?php
                    if($status == 2){
                    ?>
                    <input type="button" name="declined" value="Declined" class="btn btn-danger">
                    <?php }?>



                </div>
                <?php }}}
                
                else{
                    header("location:../UserRegistration/userLogin.php");
                }
                ?>
                
        </div>
    </div>
</body>

</html>