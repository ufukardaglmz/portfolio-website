<?php

$conn = new mysqli(
    "sql110.infinityfree.com",
    "if0_41903100",
    "Kibar25202933",
    "if0_41903100_portfolio_db"
);

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message)
VALUES (?, ?, ?)");

$stmt->bind_param("sss", $name, $email, $message);

$stmt->execute();

header("Location: index.php");

?>