<?php
 session_start();
 if(!isset($_SESSION["success"])){
     header("location: index.php");
 }

 if(isset($_POST["logout"])){
     header("location: index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>