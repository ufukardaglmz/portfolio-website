<?php

session_start();

include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

  

    $stmt = $conn->prepare("SELECT * FROM admin_users
                        WHERE username=?");

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){

    $user = $result->fetch_assoc();

    if(password_verify($password, $user["password"])){

        $_SESSION["admin"] = $username;

        if(isset($_POST["remember"])){

            setcookie("admin_user",
                      $username,
                      time() + 3600);

        }

        header("Location: dashboard.php");

    }
    else{

        echo "Wrong password";

    }

}
else{

    echo "User not found";

}

    $_SESSION["admin"] = $username;

    if(isset($_POST["remember"])){

        setcookie("admin_user",
                  $username,
                  time() + 3600);

    }

    header("Location: dashboard.php");

}
    else{

        echo "Wrong username or password";

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
                   placeholder="Username">

            <input type="password"
                   name="password"
                   placeholder="Password">
            <label>

                <input type="checkbox" name="remember">

                Remember Me

            </label>
       


            <button type="submit">Login</button>

        </form>

    </section>

</body>
</html>