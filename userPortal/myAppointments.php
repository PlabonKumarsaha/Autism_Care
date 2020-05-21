<?php
require_once "dbConnect.php";
?>

<?php
session_start();
$userID = $_SESSION['userID'];
$userName = $_SESSION["userName"];
if(isset($_POST['logout']))
        {
            session_destroy();
            header("location:../index.php");
        }
if(isset($_SESSION['userName'])){
    $sqlUser = "select * from user where userID = '$userID'"; 
$resultUser = $connect->query($sqlUser);
if($resultUser -> num_rows >0){
        while($row = $resultUser->fetch_assoc())
                {    
    

?>




<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css" />
    <div class="cointainer">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="container-fluid">
                    <div class="row">
                        <!-- sidebar -->
                        <div class="col-lg-3 sidebar fixed-top">
                            <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border "> Autism Care </a>
                            <div class="bottom-border pb-3">
                                <img src="<?php echo $row['u_image'] ?>" alt="adminimage" width="50" class="rounded-circle mr-3">
                                <a href="#" class="text-white"><?php echo $row['userName']; ?></a>
                            </div>
                            <ul class="navbar-nav flex-column mt-4">                              
                                <li class="nav-item">
                                    <a href="profile.php" class="nav-link text-white p-3 mb-2 sidebar-link "><i class="fas fa-user text-light fa-lg mr-3"></i>
                                        Profile
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="doctorAppointments.php" class="nav-link text-white p-3 mb-2 sidebar-link "><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                                        Doctors Appointments
                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="myAppointments.php" class="nav-link text-white p-3 mb-2 sidebar-link current"><i class="fas fa-table text-light fa-lg mr-3"></i>
                                        My Appointments
                                    </a>

                                </li>

                            </ul>
                            <form method="post">
                    <input type="submit" name="logout" value="Logout" class="btn btn-danger" id="logout">
                </form>

                        </div>
                        <!-- end of sidebar -->
                        <!-- top nav -->
                        <div class="col-lg-9">

                        </div>
                        <!-- end of top nav-->

                    </div>

                </div>

            </div>
        </nav>
        
        <div class="myApp">
           
            
            
            
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        
        
    </div>
    <?php }}} ?>
    </body>
</html> 
