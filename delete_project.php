<?php

include "config.php";

$id = $_GET["id"];

$sql = "DELETE FROM projects WHERE id=$id";

$conn->query($sql);

header("Location: dashboard.php");

?>