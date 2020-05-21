	<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webtech";


    $conn =  mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($conn -> connect_errno) {
  echo "<h1>Failed to connect to MySQL: " . $connect -> connect_error . "</h1>";
  exit();
}
else{

//	echo "<h1>db connected!</h1>";
}

?>