<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      $sql = "SELECT ID, username FROM admin WHERE email='".$myemail."' AND password='".$mypassword."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      $name = $row['username'];
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          
          
         $_SESSION['login_user'] = $name;
         
         header("location: landing.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Chronicle | Login | Fresno, Ca</title>
        <script src="https://use.fontawesome.com/8f62e5402a.js"></script>
        <link href="css/login.css" rel="stylesheet" type="text/css">
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
            <nav class="nav">
                <ul>
                    <li class="nav-link">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="about.html">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="products.html">Themes</a>
                    </li>
                    <li class="link">
                        <a href="index.html"><div id="logo"></div></a>
                    </li>
                    <li class="nav-link">
                        <a href="brands.html">Brands</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.html">Contact</a>
                    </li>
                    <li class="nav-link">
                        <a href="login.html">Login</a>
                    </li>
                </ul>
            </nav>
            <div class="container" onclick="myFunction(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
        <main>
            <div id="before"></div>
              <div align = "center">
                 <div>
                    <h1><b>Login</b></h1>
        				
                    <div>
                       
                       <form action = "" method = "post">
                          <div class="box">
                              <div id="username">
                                  <label for="email">Email  :</label>
                                  <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                                  <input type = "text" name = "email" class = "input"/><br /><br />
                              </div>
                              <div id="password">
                                  <label for="password">Password  :</label>
                                  <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
                                  <input type = "password" name = "password" class = "input" /><br/><br />
                              </div>
                              <input type = "submit" value = " Submit " class="submit"/><br />
                          </div>
                       </form>
                       <a href="register.php" class="user">New User?</a>
                       <p><?php echo $error; ?></p>
        					
                    </div>
        				
                 </div>
        			
              </div>
        </main>
        <footer>
            <h4>CHRONICLE</h4>
            <table>
                <tr>
                    <th>Payments</th>
                </tr>
                <tr>
                    <td><div id="paypal"></div></td>
                </tr>
            </table>
            <ul id="legal">
                <li><a href="#">Terms</a></li>
                <li><a href="#">Copyright</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Brands</a></li>
                <li>Fresno, Ca</li>
            </ul>
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </footer>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5888027a47b7d1382c769fe3/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
    <script type="text/javascript" src="Javascript/index.js"></script>
    <script type="text/javascript" src="Javascript/main.js"></script>
</html>