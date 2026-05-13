<?php

include "config.php";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message)
VALUES (?, ?, ?)");

$stmt->bind_param("sss", $name, $email, $message);

$stmt->execute();

header("Location: index.php");

?>