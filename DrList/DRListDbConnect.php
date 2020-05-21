	<?php
    
    //$servername = "localhost";
    
    $servername = "127.0.0.1";  
    $username = "root";
    $password = " ";
    $database = "webtech";


    $connect =  mysqli_connect($servername,$username,$password,$database);

// Check connection
if ($connect -> connect_errno) {
  echo "<h1>Failed to connect to MySQL: " . $connect -> connect_error . "</h1>";
  exit();
}
else{

//	echo "<h1>db connected!</h1>";
}

?>