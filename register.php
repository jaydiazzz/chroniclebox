<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        $duplicate = "SELECT email FROM `admin` WHERE email = '".$email."'";
        $dupresult = mysqli_query($db, $duplicate);
        if(mysqli_num_rows($dupresult) != 0){
            $exists = "Username already exists";
        }
        
        else {
            $query = "INSERT INTO `admin` (username, email, password) VALUES ('$name', '$email', '$password')";
            $result = mysqli_query($db, $query);
            
            if($result){
                header("landing.php");
            }
            else{
                $fmsg ="User Registration Failed";
            }
        }
        
        
        
        
        
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chronicle | Register | Fresno, Ca</title>
        <script src="https://use.fontawesome.com/8f62e5402a.js"></script>
        <link href="css/register.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.2.1.min.js" type=
        "text/javascript">
        </script>
        <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700'
        rel='stylesheet' type='text/css'>
        <link href="img/blackbackground.1.png" rel="icon" type="icon">
        <link rel="apple-touch-icon" href="img/blackbackground.1.png"/>
        <link rel="apple-touch-icon-precomposed" href="icon" />
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta content="width = device-width" name="viewport">
    </head>
    <body>
        <div>
            <form method="POST">
                <?php if(isset($smsg)){ ?><div role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                <?php if(isset($fmsg)){ ?><div role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                
                <h2>Please Register</h2>
        	    <div class="left">
                    <label for="inputEmail">Email address</label>
                    <input type="email" name="email" class="input Email" placeholder="Email address" required autofocus>
                </div>
                <div class="left">
                    <label for="inputName">First Name</label>
                    <input type="username" name="name" class="input Name" placeholder="First Name" required autofocus>
                </div>
                <div class="left">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="input Password" placeholder="Password" required>
                </div>
                <button type="submit" class="submit">Register</button>
                <br>
                <br>
                <h3>Have an account?</h3>
                <a href="login.php" class="login">Login Here</a>
                <br>
                <?php echo $exists;?>
            </form>
        </div>
    </body>
</html>