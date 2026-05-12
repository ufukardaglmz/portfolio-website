<?php

$conn = new mysqli(
    "sql110.infinityfree.com",
    "if0_41903100",
    "Kibar25202933",
    "if0_41903100_portfolio_db"
);

$id = $_GET["id"];

$sql = "DELETE FROM projects WHERE id=$id";

$conn->query($sql);

header("Location: dashboard.php");

?>