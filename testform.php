<?php
session_start();



// $nameErr = $ageErr = $mailErr = $WebsiteErr = $CommentErr = " ";
$name = $Age = $Email = $Website = $Comment = " ";
if($_SERVER['REQUEST_METHOD']=="POST"){





    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];

    if (preg_match("/^[a-zA-Z\s]+$/", $name)) {




    } else {


        $_SESSION['invalid_name']="name must be valid";
        header('Location:form.php');

    }


    if(empty($name)){

            $_SESSION['empty_name']="name is require /please enter your name";
            header('Location:form.php');
    }


    
    echo $name ;
    echo "<br>";
    echo $age ;
    echo "<br>";
    echo $email ;
    echo "<br>";
    echo $website ;
    echo "<br>";
    echo $comment ;

}







function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>