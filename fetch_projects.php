<?php

include "config.php";
$sql = "SELECT * FROM projects";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

?>

<div class="project-card">

    <h3><?php echo $row["title"]; ?></h3>

    <p><?php echo $row["description"]; ?></p>

</div>

<?php

}

?>