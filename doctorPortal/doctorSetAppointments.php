<!DOCTYPE html>
<html lang="en">
<script>
</script>
<?php
    session_start();
    if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:../index.php");
        }
    if(isset($_SESSION['doctorName'])){
    
   $doctorID= $_SESSION['doctorID'];
    $doctorName = $_SESSION['doctorName'];
     $todayDate = date('d/M/Y');
    $check = 0;
    $countTime = 0;
                                $l =0;
    $todayTime = "";
    $actualtime='';
    $i = 0;
    $k = 0;
    $verfiy = 0;
    include_once '../connection/dbConnect.php';
    
    if(isset($_POST['save']))  
                {
                       $checkbox1 = $_POST["one"];
                       foreach($checkbox1 as $chk1)  
                    {
                        $sql_time = "INSERT INTO `appointments`(`doctorID`,`patientId`, `Date`, `time`) VALUES ('$doctorID','0','$todayDate','$chk1')";
                        $result = $conn->query($sql_time);
                    }  
                    
                }
        if (isset($_POST['delete']))
        {
            $checkbox2 = $_POST["two"];
                       foreach($checkbox2 as $chk2)  
                    {
                        $sql_del = "DELETE FROM `appointments` WHERE doctorID = '$doctorID' and Date='$todayDate' and time= '$chk2'";
                        $conn->query($sql_del);
                           
                    }  
        } 
    if(isset($_POST['add']))
    {
        $checkbox3 = $_POST["three"];
                       foreach($checkbox3 as $chk3)  
                    {
                        $sql_add = "INSERT INTO `appointments`(`doctorID`,`patientId`, `Date`, `time`) VALUES ('$doctorID','0','$todayDate','$chk3')";
                        $result_add = $conn->query($sql_add);
                    }  
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

            <?php
           
            $sql = "select * from appointments where doctorID ='$doctorID'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
                { 
                    while($row = $result->fetch_assoc())
                    {
                        if($todayDate == $row['Date']){
                            $check++;
                        }
                    }
                }
            ?>
            <?php
            if($check == 0 || $result->num_rows == 0)
            {
            ?>
            <form method="post">
                <div name="selectTime" class="selectTime">
                    <div name="allCheckBox" class="allCheckBox">
                        <label>
                            <input type="checkbox" name="one[]" value="10.00am"><span>10.00am</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="11.00am"><span>11.00am</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="12.00pm"><span>12.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="1.00pm"><span>1.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="2.00pm"><span>2.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="3.00pm"><span>3.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="4.00pm"><span>4.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="5.00pm"><span>5.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="6.00pm"><span>6.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="7.00pm"><span>7.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="8.00pm"><span>8.00pm</span>
                        </label>
                        <label>
                            <input type="checkbox" name="one[]" value="9.00pm"><span>9.00pm</span>
                        </label>

                    </div>

                </div>
                <div name="save" class="save">
                    <input type="submit" name="save" value="Save My Schedule" class="btn btn-success">
            </form>
        </div>


    </div>


    <?php } ?>
    <div class="allCheckBox">
        <form method="post">


            <?php
        if($check > 0 ){
            $sql_again = "select * from appointments where doctorID ='$doctorID'";
            $result_again = $conn->query($sql_again);
            if ($result_again->num_rows > 0) 
                { 
                    while($row_again = $result_again->fetch_assoc())
                    {
                        if($todayDate == $row_again['Date']){ $countTime++;  ?>

            <label>
                <input type="checkbox" name="two[]" value="<?php echo $row_again['time'] ;?>"><span><?php echo $row_again['time'] ;?></span>
            </label>

            <?php } }}?>
            <br> <br> <br> <br>
            <input type="submit" value="Delete Schedule" class="btn btn-danger" id="deleteSchedule" name="delete">
            <br> <br> <br>
            <?php 
            $sql_add = "select * from appointments where doctorID ='$doctorID'";
            $result_add = $conn->query($sql_add);
            
            
            
            
            if ($result_add->num_rows > 0) 
                { 
                    while($row_add = $result_add->fetch_assoc())
                    {
                      
                        if($todayDate == $row_add['Date']){ 
                        $timeWithPm = $row_add['time'] ;
                        $timeWithoutPm = (int)explode(".", $timeWithPm)[0];
                        if($timeWithoutPm == 1 || $timeWithoutPm == 2 || $timeWithoutPm == 3 || $timeWithoutPm == 4 || 
                          $timeWithoutPm == 5 || $timeWithoutPm == 6 || $timeWithoutPm == 7 || $timeWithoutPm == 8 ||
                          $timeWithoutPm == 9 )
                        {
                            $timeWithoutPm += 12;
                        }
                              
                            if($l< $countTime){
                                $arr[$l] = $timeWithoutPm ; 
                                $l++;
                                
                                    }
                        }
                    }
                }
            
            
            for( $k = 10; $k < 22; $k++){
                $verfiy = 0;
                    for( $i= 0 ; $i < $countTime; $i++){ 
                        if($k == $arr[$i]){$verfiy++;}}
                        
                        if($verfiy == 0){
                            if($k < 12)
                            {
                                $time = strval($k);
                                $am = ".00am";
                                $actualtime = $time.$am; ?>
            <label>
                <input type="checkbox" name="three[]" value="<?php echo $actualtime ;?>"><span><?php echo $actualtime ;?></span>
            </label>

            <?php 
                            }
                            else
                            {
                                if($k != 12)
                                {
                                    $time = $k - 12;
                                $pm = ".00pm";
                                 $actualtime = strval($time).$pm; 
                                }
            else
            {
                $time = $k;
                $pm = ".00pm";
                $actualtime = strval($time).$pm;
            }
            ?>

            <label>
                <input type="checkbox" name="three[]" value="<?php echo $actualtime ;?>"><span><?php echo $actualtime ;?></span>
            </label>
            <?php 
                            }
                        
                    }
                }
            
            
            ?>


            <br> <br> <br>
            <input type="submit" name="add" class="btn btn-success" id="addSchedule" value="Add Schedule">
        </form>
    </div>










    </div>

    </div>
    <?php }}
                
                else{
                    header("location:../UserRegistration/userLogin.php");
                }?>

</body>

</html>