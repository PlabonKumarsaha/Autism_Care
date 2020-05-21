<!DOCTYPE html>
<html>
<head>
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



</head>
<body class="container-body">
  

<div >
<div class="fixed-top">

        <nav class="navbar navbar-light" style="background-color: #036889">
            <div class="container">
                <a href="" class="navbar-brand font-weight-bold">
                    <img alt="human_logo" src="images/human.png" width="27" height="27"><span style="color:#FFFFFF ; font-family: Georgia, 'Times New Roman', Times, serif;"> Login | </span>
                    <span> <img alt="lock" src="images/lock.png" width="27" height="27"></span> <span style="color:#FFFFFF ; font-family: Georgia, 'Times New Roman', Times, serif;"> Register</span>


                     </a>
					 <!-- not working properly -->
                <a href="UserRegistration/UserRegistration.php" class="navbar-brand"><button type="button" class="btn btn-outline-danger">Make An Appointment</button></a>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <a href="" class="navbar-brand font-weight-bold" style="color: #121212; font-family: Georgia, 'Times New Roman', Times, serif;">Autism Care</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse text-center" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="" class="nav-link"> <b>Doctor</b> <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item active">
                            <a href="" class="nav-link"> <b>Contact Us</b> <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <a href="#" class="navbar-brand">
                        <img alt="human_logo" src="images/facebook.png" width="27" height="27"><span style="color: #121212; ; font-family: Georgia, 'Times New Roman', Times, serif;"> | </span>
                        <span> <img alt="lock" src="images/instagram.png" width="27" height="27"></span>
                    </a>
                </div>

            </div>
        </nav>


        <!-- new nav bar create -->


<nav class="navbar navbar-light" style="background-color:green" sticky-top;>
     <div class="container">


   <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    Availability
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Available Any Day</a>
    <a class="dropdown-item" href="#">Available Today</a>
    <a class="dropdown-item" href="#">Available in the next 3 days</a>
    <a class="dropdown-item" href="#">Available coming weekend</a>


  </div>
</div>

<!-- Create DropDown -->


 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Relevence
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Relevence</a>
    <a class="dropdown-item" href="#">Price- Low to High</a>
    <a class="dropdown-item" href="#">Price- High to Low</a>
    <a class="dropdown-item" href="#">Recommendation</a>


  </div>
</div>




 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gender
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Male</a>
    <a class="dropdown-item" href="#">Female</a>
    


  </div>
</div>
                
 </div>
 </nav>

 
<!-- pagination NAvbar -->

<div class="position-sticky">
<nav class="navbar navbar-light" style="background-color:white";>

 <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-left">
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

 </div> 


</div>
<br>
<br>
<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

          <!-- Card start -->
             


 <section align="centar" id="Card-section">
  
 <div class="row">
  <div class="container">

    <?php
	/*
	
	//this is for pagination
	$results_per_page = 5;
	$page = 1;
	
	if(isset($_GET['page'])){

$page = $_GET['page'];
}
else {
	
	$page =1;
}

//starting result number
$this_page_first_result =($page-1)*$results_per_page;


*/

//connecting the database file
require_once("DRListDbConnect.php");
// LIMIT = $this_page_first_result,results_per_page

$showDataQuery="Select * from doctor ";
$runDataQuery =mysqli_query($connect,$showDataQuery);


if($runDataQuery == true)
{
 while($myData = mysqli_fetch_array($runDataQuery)){

//this the end of php befor ending scope
  ?>
                            
<div class="card mb-3" style="max-width:950px;">
  
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="profile-image"  src="DoctorRegistration/NIDImg/<?php echo $myData['NIDimg'];?>" alt="Doctor image" class="card-img" >
    </div>
 



      <div class="card-body">
        <h5 class="card-title"> <?php echo $myData["doctorName"]; ?> </h5>
        <p class="card-text"> <?php echo $myData["doctorSSN"]; ?> </p>
        

        <a onclick="return confirm('are you sure?');"  href="UserRegistration/ userLogin.php?id = <?php echo $myData["id"]; ?>" class="btn btn-primary" >Book Appointment</a>
      </div>


   <?php
// php for ending the scope
    } 
  }
/*

// this is for pagination

$page_query = "select * from doc_data order by id";
$page_result = mysqli_query($connect,$page_query);
$total_rec = mysqli_num_rows($page_result);
$total_pages =ceil($total_rec/$results_per_page);

for($i=1; $i < $total_pages;$i++){
	
	
	echo '<a href="DR_List.php?page='.$i.'"></a>" ';
}
*/

    ?>
	
	



  </div>
</div>


 <div class="card mb-3" style="max-width:950px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="profile-image" src="images/tony.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">DR. SUMON ROY</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>


        <a href="#" class="btn btn-primary">Book Appointment</a>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3" style="max-width:950px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img class="profile-image"src="images/pasha.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">


    </div>
  </div>
</div>






                    







</div>
    
    </div>
            
        
          </section>


<div class="div-clear"> </div>



                  <!-- footer start -->


    <footer class="footersection" id="footerfdiv">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 footer-div">
                    <div>
                        <h3>About Autism Care</h3>
                        <p>This is a footer for autism care</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 footer-div">
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