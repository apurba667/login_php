<?php
session_start();
if(isset($_POST["login"])){
    $name = $_POST["name"];
    $pass = $_POST["password"];
    define("nam","Apurba");
    define("pas","TheBoss");

    if($name == nam && $pass == pas){
        $_SESSION["success"]="";
        header("location: admin.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter Your name">
        <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>