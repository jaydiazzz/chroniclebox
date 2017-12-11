<?php
    include("config.php");
    session_start();
                
    if($_SESSION['login_user'] != true) {
        echo("Access denied!");
        exit();
    } 
            
    else {
        $display = "Hello {$_SESSION['login_user']}!";
        $query = "SELECT tasks FROM todo"; //You don't need a ; like you do in SQL
        $result = mysqli_query($db, $query);
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
            $todo = "<p>".$row['tasks']."</p>" ;  //$row['index'] the index here is a field name
        }
    }
    $delete = "DELETE FROM db WHERE tasks="
    
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/8f62e5402a.js"></script>
        <style type="text/css">
            *{
              font-family:'Open Sans', sans-serif;
            }
            
            body{
              background:#001a33;
              overflow-x:hidden;
            }
            
            .list{
              width:600px;
              height:100%;
              margin:auto;
              margin-top:15vh;
              background-color:rgba(255,255,255,.4);
              border-radius:2%;
              padding:2%;
            }
            textarea[name="text"]{
              padding:1%;
              font-size:16px;
              margin-left:10%;
              width:40%;
            }
            input[name="button"]{
              border:none;
              color:white;
              background-color:#333;
              padding:2% 4%;
              border-radius:3%;
              float:right;
              margin-right:5%;
            }
            
            ul{
              list-style-type:none;
            }
            
            li{
                color:white;
                text-shadow:1px 1px 1px black;
                width:90%;
                background-color:rgba(0,0,0,.5);
                padding:2%;
                border-radius:1%;
                position:relative;
                word-wrap:break-word;
            }
              
            .stars {
              width: 5px;
              height: 5px;
              border-radius: 50%;
              background-color: white;
              position: absolute;
              z-index: -1;
            }
            
            .red {
              background-color: #ff6666;
            }
            
            .yellow {
              background-color: #ffe066;
            }
            
            .blue {
              background-color: #0099cc;
            }
        </style>
    </head>
    <body>
        <div class="list" name="postForm">
            <h2>To-Do List</h2>
            <a href="blog.php">Final Preview</a>
            <h1><?php echo $display; ?></h1>
          <form method="post" name="postForm">
            <textarea type="text" placeholder="Task..." name="text"></textarea>
            <input value="Create" name="button" type="submit">
          </form>
          <div><?php echo $todo; ?></div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
              $(document).ready(function() {
                $('form').submit(function(event) { //Trigger on form submit
                    $('textarea').empty(); //Clear the messages first
            
                    //Validate fields if required using jQuery
            
                    var postForm = { //Fetch form data
                        'text'     : $('textarea').val() //Store name fields value
                    };
            
                    $.ajax({ //Process the form using $.ajax()
                                type      : 'POST', //Method type
                                url       : 'something.php', //Your form processing file URL
                                data      : postForm, //Forms name
                                dataType  : 'json',
                                success   : function(data) {
                                    if (!data.success) { //If fails
                                        if (data.errors.name) { //Returned if any error from process.php
                                            $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                                        }
                                        }
                                    else {
                                        $('ul').fadeIn(1000).append('<li>' + data.posted + '<i class="fa fa-close" style="color:#decda1;float:right;text-shadow:none;"></i></li>'); //If successful, than throw a success message
                                        }
                                    }
                            });
                            event.preventDefault(); //Prevent the default submit
                        });
                    });
            
            $(document).ready(function time() {
              const galaxy = $(".list");
              var number = Math.floor(Math.random() * 100 + 20);
            
              for (let i = 0; i < number; i++) {
                var bodyh =$(".list").css("height");
                bodyh = parseInt(bodyh)+200;
                var randomHeight = Math.floor(Math.random() * bodyh) + 1;
                var randomWidth = Math.floor(Math.random() * 100) + 1;
                var randomClass = Math.floor(Math.random() * 4) + 1;
                var star = $('<div class="stars"></div>');
                galaxy.after(star);
                star.css("top", randomHeight + "px");
                star.css("left", randomWidth + "%");
            
                if (randomClass == 1) {
                  star.addClass("red");
                } else if (randomClass == 2) {
                  star.addClass("green");
                } else if (randomClass == 3) {
                  star.addClass("yellow");
                } else if (randomClass == 4) {
                  star.addClass("blue");
                }
              }
            });
              $("textarea[name='text']").keypress(function(event){
                if(event.keyCode == 13){
                    event.preventDefault();
                    $("input[name='button']").click();
                }
              });
            });
        </script>
    </body>
</html>