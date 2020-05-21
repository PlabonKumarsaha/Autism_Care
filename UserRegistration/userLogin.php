<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Sign in</title>
    <style type="text/css">
    


     body {
          background-color: #F3EBF6;
          font-family: 'Ubuntu', sans-serif;
      }

      .main {
          background-color: #FFFFFF;
          width: 400px;
          height: 400px;
          margin: 10% auto;
          box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
      }

      .sign {
          padding-top: 40px;
          color: #8C55AA;
          font-family: 'Ubuntu', sans-serif;
          font-weight: bold;
          font-size: 23px;
      }

      .un {
          width: 76%;
          color: rgb(38, 50, 56);
          font-weight: 700;
          font-size: 14px;
          letter-spacing: 1px;
          background: rgba(136, 126, 126, 0.04);
          padding: 10px 20px;
          border: none;
          border-radius: 20px;
          outline: none;
          box-sizing: border-box;
          border: 2px solid rgba(0, 0, 0, 0.02);
          margin-left: 46px;
          text-align: center;
          margin-bottom: 27px;
          font-family: 'Ubuntu', sans-serif;
      }

      form.form1 {
          padding-top: 40px;
      }

      .pass {
          width: 76%;
          color: rgb(38, 50, 56);
          font-weight: 700;
          font-size: 14px;
          letter-spacing: 1px;
          background: rgba(136, 126, 126, 0.04);
          padding: 10px 20px;
          border: none;
          border-radius: 20px;
          outline: none;
          box-sizing: border-box;
          border: 2px solid rgba(0, 0, 0, 0.02);
          margin-bottom: 50px;
          margin-left: 46px;
          text-align: center;
          margin-bottom: 27px;
          font-family: 'Ubuntu', sans-serif;
      }



      .submit {
          cursor: pointer;
          border-radius: 5em;
          color: #fff;
          background: linear-gradient(to right, #9C27B0, #E040FB);
          border: 0;
          padding-left: 40px;
          padding-right: 40px;
          padding-bottom: 10px;
          padding-top: 10px;
          font-family: 'Ubuntu', sans-serif;
          margin-left: 35%;
          font-size: 13px;
      }

      .errName {
          color: red;
          margin-left: 35%;
          margin-top: 0px;
          padding: 0px;
          text-align: center;
          font-weight: bold;
          font-family: 'Ubuntu', sans-serif;
      }

      .errPass {
          color: red;
          margin-left: 35%;
          margin-top: 0px;
          padding: 0px;
          text-align: center;
          font-weight: bold;
          font-family: 'Ubuntu', sans-serif;
          margin-bottom: 27px;
      }

      .forgot {
          text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
          color: #E1BEE7;
          padding-top: 15px;
      }

      a {
          color: #E1BEE7;
          text-decoration: none
      }
    .doctorLogin p{
        margin-left: 40%;
        margin-right: 49%;
    }
</style>
</head>


<?php
    session_start();
require_once("userDBconnect.php");
    $userEmail ="";
    $uPass ="";
    $errEmail ="";
    $errPass = "";
    $hash = "";
	$wrongPass = "";
	$wrongName = "";
    if(isset($_POST['submit']))
        {
            $errEmail ="";
            $errPass = "";
            if(empty($_POST["uname"]))
            {
                $errEmail = "*Email required!";
            }
            else
            {
                 $userEmail =htmlspecialchars($_POST["uname"]);
                 $userEmail = trim ($userEmail); 
                 $userEmail = stripcslashes($userEmail);
   
            }
            if(empty($_POST["upass"]))
            {
                $errPass = "*Password required!";
                
            }
            else
            {
                $uPass = $_POST["upass"];
                $uPass = trim($uPass);
                $uPass = stripcslashes($uPass);
               // $hash = password_hash($uPass, PASSWORD_DEFAULT);

            }
			
			
			
			 $sql ="Select * from user  where userEmail = '$userEmail'";	
			 $result = $conn->query($sql);
            if ($result->num_rows > 0) 
                { 
                while($row = $result->fetch_assoc())
                {
		    if(password_verify($uPass,$row["userPassword"]))
            {				
            $sql2 ="Select * from user  where userEmail = '$userEmail'";		
            $result2 = $conn->query($sql2); 
            if($result2->num_rows > 0){
                while($row2 = $result2->fetch_assoc())
                {
                    $_SESSION['userID'] = $row2['userID'];
                    $_SESSION['userName'] = $row2['userName'];
                    header("Location: ../userPortal/profile.php");
                    
                }
                
					 
				 }
                     
				}
                }
            } 
        
        
        
        
        else
        {
            echo"i am here";
            $sql3 ="Select * from doctor  where doctorEmail = '$userEmail'";	
			 $result3 = $conn->query($sql3);
            if ($result3->num_rows > 0) 
                { 
                while($row3 = $result3->fetch_assoc())
                {
		    if(password_verify($uPass,$row3["doctorPass"]))
            {
                echo "i am here too";
            $sql4 ="Select * from doctor  where doctorEmail = '$userEmail'";		
            $result4 = $conn->query($sql4); 
            if($result4->num_rows > 0){
                while($row4 = $result4->fetch_assoc())
                {
                    $_SESSION['doctorID'] = $row4['doctorId'];
                    $_SESSION['doctorName'] = $row4['doctorName'];
                    header("Location:../doctorPortal/doctorPortal.php");
                }
					 
				 }
                      
				}
                } }
                else{
                    $wrongName ="Wrong username or password";
                }
    } 
            
        }
    
        
    
 
   ?>


<body class = "loginbody">
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form method="post" class="form1">
            <input class="un " name="uname" type="text" align="center" placeholder="Username" >
           <?php 
                if(!empty($errEmail))
                {
            ?>
            <span class="errName"><?php echo $errEmail; ?></span> 
            <?php
                }
            ?>
			
			<?php 
                if(!empty($wrongName))
                {
            ?>
            <span class="errName"><?php echo $wrongName; ?></span> 
            <?php
                }
            ?>
            <input class="pass" name="upass" type="password" align="center" placeholder="Password" >
            <?php 
                if(!empty($errPass))
                {
            ?>
            <span class="errPass"><?php echo $errPass ?></span> 
			
            <?php
                }
            ?>
			<?php 
                if(!empty($wrongPass))
                {
            ?>
            <span class="errPass"><?php echo $wrongPass ?></span> 
            <?php
                }
            ?>
            <input type="submit" class="submit" name="submit" value="Sign in" align="center">
        
            <p class="forgot" class="forgotpass" align="center"><a href="UserRegistration.php">new?Please Register</p>
            </form>
    </div>

</body>

</html>
<?php 
/* if (isset($_COOKIE['rememberme']) && isset($_COOKIE['rememberme2'])) {

        $rememberme = explode(",", $_COOKIE["rememberme"]);
        $cookie_email = $rememberme[0];
        $cookie_key = $rememberme[1];
         $rememberme2 = explode(",", $_COOKIE["rememberme2"]);
        $cookie_pass = $rememberme2[0];
        $cookie_key2 = $rememberme2[1];
         $query_remember = "SELECT * FROM user WHERE userEmail = '$cookie_email' abd pwd = '$cookie_pass'";
       
        $result_remember = mysqli_query($conn, $query_remember) ;
       if($result_remember == false){
           $query_remember2 = "SELECT * FROM doctor WHERE doctorEmail = '$cookie_email' abd pwd = '$cookie_pass'";  
           $result_remember2 = mysqli_query($conn, $query_remember2) ;//or die (mysqli_error($db_handle));
       }
    else{
		
              

            $query ="Select * from user  where userEmail = '$userEmail'"
            or die("failed to query database".mysql_error());
                    
					
           // $query ="Select * from user  where userEmail = '$userEmail' and  userPassword = '$uPass'";
            $result = $conn->query($query); 
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc())
                {
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['userName'] = $row['userName'];
                }
                //print_r($_SESSION);
           header("Location: ../userPortal/profile.php");
        //setcookie("rememberme", $userEmail . "," . "name", time()+86400 * 7);
       // setcookie("rememberme2", $hash . "," . "pass", time()+86400 * 7);

        }
        else if($result->num_rows == 0){
            $query1 ="Select * from doctor  where doctorEmail = '$userEmail' and  doctorPass = '$uPass'";  
            $result1 = $conn->query($query1);  
            if($result1->num_rows > 0){
                while($row = $result1->fetch_assoc())
                {
                    $_SESSION['doctorID'] = $row['doctorId'];
                    $_SESSION['doctorName'] = $row['doctorName'];
                }
         
        }
            else{
                echo "wrong username or pass";
            }
        

        }
        else {
            echo "wrong username or pass";
        
    }
    //cookies set for 7 days
        // setcookie("rememberme", $uName . "," . "name", time()+86400 * 7);
        // setcookie("rememberme2", $hash . "," . "pass", time()+86400 * 7);
    }
			}     }
       
        */ 
   ?>