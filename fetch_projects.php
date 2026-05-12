<?php

$conn = new mysqli(
    "sql110.infinityfree.com",
    "if0_41903100",
    "Kibar25202933",
    "if0_41903100_portfolio_db"
);

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