<?php
    include("config.php");
    session_start();
    $query = "SELECT tasks FROM todo"; //You don't need a ; like you do in SQL
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        $todo = "<p>".$row['tasks']."</p>" ;  //$row['index'] the index here is a field name
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="//cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <style>
            div a img{
                display:none;
            }
        </style>
    </head>
    <body>
        <h1 style="font-family:'Open Sans', sans-serif;">Blog</h1>
        <p><?php echo $todo ?></p>
        <!--<form method="POST">-->
        <!--    <textarea name="editor1" class="ckeditor"></textarea>-->
        <!--    <button type="submit" value="submit" name="submit">Submit</button>-->
        <!--</form>-->
        <script type="text/javascript">
            CKEDITOR.replace(jQuery('.ckeditor'));
            $(document).ready(function() {
                $('form').submit(function(event) { //Trigger on form submit
                    $('textarea').empty(); //Clear the messages first
            
                    //Validate fields if required using jQuery
            
                    var postForm = { //Fetch form data
                        'text'     : $('textarea').val() //Store name fields value
                    };
            
                    $.ajax({ //Process the form using $.ajax()
                                type      : 'POST', //Method type
                                url       : 'post.php', //Your form processing file URL
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
        </script>
    </body>
</html>