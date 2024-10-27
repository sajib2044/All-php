
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testform.php" method="POST" required>

    Name : <input type="text" name="name"><br><br>
<?php

    if(isset($_SESSION['invalid_name'])){

        echo $_SESSION['invalid_name'];

        
    }
    if(isset( $_SESSION['empty_name'])){
        echo  $_SESSION['empty_name'];
    }
        
    
    
?>  

    Age :  <input type="text"  name="age"><br><br>
    Email :<input type="text" name="email"><br><br>
    Website :<input type="text" name="website"><br><br>
    Comment :<textarea name="comment" rows="7" col="50"></textarea><br><br>

    <input type="radio" name="gender" value="female">Female 
    <input type="radio" name="gender" value="male">Male 
    <input type="radio" name="gender" value="none">None<br><br>
    <input type="submit">

    </form>

<?php


unset($_SESSION['empty_name']);
unset($_SESSION['invalid_name']);
?>
    
    



</body>
</html>