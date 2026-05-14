<?php

session_start();

if(!isset($_SESSION["admin"])){

    header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="projects">

        <h2>Admin Dashboard</h2>

        <p>Welcome <?php echo $_SESSION["admin"]; ?></p>
        <?php

include "config.php";

$sql = "SELECT * FROM projects";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

?>

    <div class="project-card">

        <h3><?php echo $row["title"]; ?></h3>

        <p><?php echo $row["description"]; ?></p>
        <a href="edit_project.php?id=<?php echo $row['id']; ?>">
            Edit
        </a>

        <br><br>

        <a href="delete_project.php?id=<?php echo $row['id']; ?>">
            Delete
        </a>

    </div>

<?php

}

?>
        <br><br>

<a href="add_project.php">
    Add Project
</a>

<br><br>

<a href="logout.php">
    Logout
</a>
<h2>Messages</h2>

<table>

<tr>

    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Action</th>

</tr>

<?php

include "config.php";

$sql = "SELECT * FROM contacts";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

?>

<tr>

    <td><?php echo $row['name']; ?></td>

    <td><?php echo $row['email']; ?></td>

    <td><?php echo $row['message']; ?></td>
    <td>

    <a href="delete_message.php?id=<?php echo $row['id']; ?>">

        Delete

    </a>

</td>

</tr>

<?php

}

?>

</table>

    </section>

</body>
</html>