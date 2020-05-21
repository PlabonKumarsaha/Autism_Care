
<?php

session_start();
$_SESSION['err_fname'] = " ";
$_SESSION['err_email_addr'] = " ";
$_SESSION['err_pwd'] = " ";
$_SESSION['err_phone'] = "";
//$_SESSION['uimg'] ="";


require_once("userDBconnect.php");


//data members

$fname =  $email_addr = $phone= $pwd   =" ";

$nameForUImage = " ";

$hash = "";

//Errors

$err_fname =  $err_email_addr = $err_phone = $err_pwd =  "";

 $err_nameForUImage  = " ";



if($_SERVER["REQUEST_METHOD"] == "POST"){



	
		//if(isset($_REQUEST['btn_personal_info'])){

	if(isset($_REQUEST['btn_save'])){
		//var_dump()

		//var_dump($_REQUEST);

	//echo "hi";

		if(empty($_POST['fname'])){
	  	
        $err_fname = "Name cannot be empty!";
        //$err_fname = "ami ekhane ace" . $_POST['fname'];
      $_SESSION['err_fname'] = $err_fname;
      //header('location:index.php');
      header('location:UserRegistration.php');

    }
    else{
       $err_fname = " ";
      $fname = $_POST['fname'];

	  //echo $fname . "<br>";
	 // 
    }
	
	
	 if(empty($_POST['email_addr'])){
      $err_email_addr = "email adress  cannot be empty!";
	   $_SESSION['err_email_addr'] = $err_email_addr;
      header('location:UserRegistration.php');
    }
    else{
    	$err_email_addr = "";
      $email_addr = $_POST['email_addr'];
	 //echo $UserRegistration . "<br>";
    }
	
	 if(empty($_POST['pwd'])){
      $err_pwd = "password cannot be empty!";
      $_SESSION['err_pwd'] = $err_pwd;
       header('location:UserRegistration.php');
    }
    else{
    	$err_pwd = " ";
      $pwd = $_POST['pwd'];
      //echo $pwd . "<br>";
	  // echo $Adr1 . "<br>";
    }
	
	 if(empty($_POST['phone'])){
      $err_phone = "phone cannot be empty!";
      $_SESSION['err_phone'] = $err_phone;
      header('location:UserRegistration.php');
    }
    else{
    	$err_phone = " ";
      $phone = $_POST['phone'];
     // echo $phone . "<br>";
     // header('location:UserRegistration.php');
	 
    }
	
	
	
	



if(isset($_REQUEST['fname']) && isset($_REQUEST['email_addr']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']))
{

$fname = $_REQUEST["fname"];
$email_addr =$_REQUEST["email_addr"];
$pwd =$_REQUEST["pwd"];
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$phone = $_REQUEST["phone"];

}


//echo $hash;

//}
//}



//var_dump($_REQUEST);
//var_dump($_FILES);
/*if(isset($_POS)){*/

//for picture
//save the image
	//vae_dump;







/*//image upload validation
$allowed = array('gif', 'png', 'jpg');*/

//for second picture
//save the image
$usr_img = $_FILES["uimg"];
//saves the file in project location
$usr_tmpName =$_FILES["uimg"]["tmp_name"];


			
			//echo $nameForNid;
			//seting up a location
			$imageLocation = "uimage/";
			
			$nameForuimg = uniqid();
			//echo $imageLocation2;
			//moving from temp to permanet
           
move_uploaded_file($usr_tmpName,$imageLocation."$nameForuimg.jpg");





//echo $fname . " ".$lname . " " .$email_addr  . " " . $usr_pwd;


$inserQuery = "Insert into user (u_image,userName,userEmail,userPhone,userPassword) 
VALUES ('$nameForuimg.jpg' , '$fname' , '$email_addr' , '$phone' , '$hash')";
	//echo $inserQuery;
	$runInsertQuery = mysqli_query($conn,$inserQuery);

	if($runInsertQuery){

		 header("location:userLogin.php");;
		//header("location: index.php?action=true");
	}else {
			echo "Data were missing". "<br>";
		
		//header("location: index.php?action=false");
	} 

	

}





}


	
	
	
	
	  

?>