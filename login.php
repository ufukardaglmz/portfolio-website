<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

session_start();

include "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];

    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $user = $result->fetch_assoc();

        if($password == $user['password']){

            $_SESSION["admin"] = $username;

            header("Location: dashboard.php");

            exit();

        }else{

            echo "Wrong password!";

        }

    }else{

        echo "User not found!";

    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title>Admin Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<section class="contact">

<h2>Admin Login</h2>

<form method="POST">

<input type="text"
       name="username"
       placeholder="Username"
       required>

<input type="password"
       name="password"
       placeholder="Password"
       required>

<label>

<input type="checkbox" name="remember">

Remember Me

</label>

<button type="submit">

Login

</button>

</form>

</section>

</body>

</html>