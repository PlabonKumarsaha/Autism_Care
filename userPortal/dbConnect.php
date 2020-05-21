	<?php
    
    //$servername = "localhost";
    
    $servername = "localhost";  
    $username = "root";
    $password = "";
    $database = "webtech";


    $connect =  mysqli_connect($servername,$username,$password,$database) or die("Could not connect database")


?>

