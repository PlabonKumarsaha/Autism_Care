
<?php

session_start();
$_SESSION['err_fname'] = " ";
$_SESSION['err_lname'] = " ";
$_SESSION['err_email_addr'] = " ";
$_SESSION['err_pwd'] = " ";
$_SESSION['err_phone'] = " ";
$_SESSION['err_ssn'] = " ";
$_SESSION['mbbs'] = " ";
$_SESSION['nid'] =" ";

require_once("dbConnect.php");

$fname = $lname = $email_addr = $pwd = $phone = $ssn = " ";
$nameForMbbs =$nameForNid = " ";
$hash = "";

//Errors

$err_fname = $err_lname = $err_email_addr = $err_pwd = $err_phone = $err_ssn = "";

$err_nameForMbbs = $err_nameForNid = " ";



if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	//if(isset($_REQUEST['btn_personal_info'])){

	if(isset($_REQUEST['btn_save'])){

	//echo "hi";

		if(empty($_POST['fname'])){
	  	
        $err_fname = "First Name cannot be empty!";
        //$err_fname = "ami ekhane ace" . $_POST['fname'];
      $_SESSION['err_fname'] = $err_fname;
      header('location:index.php');

    }
    else{
       $err_fname = " ";
      $fname = $_POST['fname'];
    }
	
	  if(empty($_POST['lname'])){
      $err_lname = "last Name cannot be empty!";
      $_SESSION['err_lname'] = $err_lname;
      header('location:index.php'); 
    }
    else{
      $lname = $_POST['lname'];
    }
	
	 if(empty($_POST['email_addr'])){
      $err_email_addr = "email adress  cannot be empty!";
	   $_SESSION['err_email_addr'] = $err_email_addr;
      header('location:index.php');
    }
    else{
    	$err_email_addr = "";
      $email_addr = $_POST['email_addr'];
    }
	
	 if(empty($_POST['pwd'])){
      $err_pwd = "addr cannot be empty!";
      $_SESSION['err_pwd'] = $err_pwd;
       header('location:index.php');
    }
    else{
    	$err_pwd = "";
      $pwd = $_POST['pwd'];
	  // echo $Adr1 . "<br>";
    }
	
	 if(empty($_POST['phone'])){
      $err_phone = "adr2 cannot be empty!";
      $_SESSION['err_phone'] = $err_phone;
       header('location:index.php');
    }
    else{
    	$err_phone = "";
      echo $phone . "<br>";
	 
    }
	
	
	 if(empty($_POST['ssn'])){
      $err_ssn = "ssn cannot be empty!";
      $_SESSION['err_ssn'] = $err_ssn;
      header('location:index.php');
    }
    else{
    	$err_ssn = "";
      $ssn = $_POST['ssn'];
	 // echo $City . "<br>";
    }
	



if(isset($_REQUEST['fname'])&& isset($_REQUEST['lname']) && isset($_REQUEST['email_addr']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['ssn']) )
{

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email_addr =$_REQUEST["email_addr"];
$pwd =$_REQUEST["pwd"];
$hash = password_hash($pwd, PASSWORD_DEFAULT);
$phone = $_REQUEST["phone"];
$ssn = $_REQUEST["ssn"];
}
$mbbs_img = $_FILES["mbbs"];
$mbbs_tmpName =$_FILES["mbbs"]["tmp_name"];
$imageLocation = "certficateImg/";
move_uploaded_file($mbbs_tmpName,$imageLocation."$nameForMbbs.jpg");
$nid_img = $_FILES["nid"];
$nid_tmpName =$_FILES["nid"]["tmp_name"];
$imageLocation2 = "NIDImg/";
$nameForNid = uniqid();
move_uploaded_file($nid_tmpName,$imageLocation2."$nameForNid.jpg");
$doctorName = $fname." ".$lname;
        
        
        
        
        
$inserQuery = "Insert into doctor (doctorName,doctorEmail,doctorPass,doctorPhone,doctorSSN,doctorCImage) VALUES ('$doctorName','$email_addr','$pwd','$phone','$ssn','$nameForMbbs.jpg')";
	//echo $inserQuery;
	$runInsertQuery = mysqli_query($connect,$inserQuery);
	if($runInsertQuery){
		echo "row Inserted" ."<br>";
	}else {
			echo "Data were missing". "<br>";

	} 

	} 

}






	
	  

?>