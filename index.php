<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");

while($row = mysqli_fetch_assoc($result)){
echo '<a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><br/>';
}

?>
