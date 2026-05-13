<?php

session_start();

if(!isset($_SESSION["admin"])){

    header("Location: login.php");

}

include "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO projects (title, description)
            VALUES ('$title', '$description')";

    $conn->query($sql);

    echo "<h3>Project Added Successfully!</h3>";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Project</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<section class="contact">

    <h2>Add Project</h2>

    <form method="POST">

        <input type="text"
               name="title"
               placeholder="Project Title">

        <textarea name="description"
                  placeholder="Project Description"></textarea>

        <button type="submit">Add Project</button>

    </form>

</section>

</body>
</html>