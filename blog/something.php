<?php
   include("config.php");
   session_start();
   $text = mysqli_real_escape_string($db,$_POST['text']);
   $form_data = array(); //Pass back the data to `form.php`
    /* Validate the form on the server side */
    if (empty($_POST['text'])) { //Name cannot be empty
        $errors['text'] = 'Name cannot be blank';
    }
    
    if (!empty($errors)) { //If errors in validation
        $form_data['success'] = false;
        $form_data['errors']  = $errors;
    }
    else { //If not, process the form, and return true on success
        $form_data['success'] = true;
        $query = "INSERT INTO `todo` (tasks) VALUES ('$text')";
        $result = mysqli_query($db, $query);
        $form_data['posted'] = "$text";
    }
    
    //Return the data back to todo.php
    echo json_encode($form_data);
?>