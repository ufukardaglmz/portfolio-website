<?php

include "config.php";

$id = $_GET["id"];

$sql = "SELECT * FROM projects WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $title = $_POST["title"];

    $description = $_POST["description"];

    $update = "UPDATE projects
               SET title='$title',
               description='$description'
               WHERE id=$id";

    $conn->query($update);

    header("Location: dashboard.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Edit Project</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<section class="contact">

    <h2>Edit Project</h2>

    <form method="POST">

        <input type="text"
               name="title"
               value="<?php echo $row['title']; ?>">

        <textarea name="description"><?php echo $row['description']; ?></textarea>

        <button type="submit">
            Update Project
        </button>

    </form>

</section>

</body>
</html>