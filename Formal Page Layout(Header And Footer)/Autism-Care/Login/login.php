.
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Sign in</title>
</head>
<?php
    $uName ="";
    $uPass ="";
    $errName ="";
    $errPass = "";
    if(isset($_POST['submit']))
        {
            $errName ="";
            $errPass = "";
            if(empty($_POST["uname"]))
            {
                $errName = "*Name required!";
            }
            else
            {
                 $uName =htmlspecialchars($_POST["uname"]);  
                
            }
            if(empty($_POST["upass"]))
            {
                $errPass = "*Password required!";
            }
            else
            {
                $uPass = $_POST["upass"];
            }
        }
 
   ?>

<body class = "loginbody">
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form method="post" class="form1">
            <input class="un " name="uname" type="text" align="center" placeholder="Username" >
           <?php 
                if(!empty($errName))
                {
            ?>
            <span class="errName"><?php echo $errName; ?></span> 
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
            <input type="submit" class="submit" name="submit" value="Sign in" align="center">
            <p class="forgot" class="forgotpass" align="center"><a href="#">Forgot Password?</p>
    </div>

</body>

</html>