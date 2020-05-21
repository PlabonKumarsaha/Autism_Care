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
                                <a href="" class="nav-link text-white p-3 mb-2 sidebar-link current"><i class="fas fa-user text-light fa-lg mr-3"></i>
                                    Profile
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="doctorAppointments.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>
                                    Doctors Appointments
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="myAppointments.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-table text-light fa-lg mr-3"></i>
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

    <div class="container col-lg-6 ml-auto">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">

                                <div class="image-container">
                                    <img src="../UserRegistration/uimage/<?php echo $row['u_image'] ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>

                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $row['userName']; ?></a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $row['userName']; ?>
                                            </div>
                                        </div>
                                        <hr />                     

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $row['userEmail'] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $row['userPhone']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-8 col-6">
                                                <form action="" method="POST">
                                                    <button class="btn btn-default" style="width: 70px;" name="Submit1">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


<?php } }
else{
    header("location:../index.php");
}}

?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>
