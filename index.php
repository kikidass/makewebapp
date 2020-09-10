<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");

while($row = mysqli_fetch_assoc($result)){  // DB를 한줄씩 읽어와 row에 저장
echo '<a href="index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a><br/>';
}  // 일단 DB에서 타이틀값을 한줄씩 다 읽어서 echo로 표시 후 특정 링크를 클릭하는 순간 주어진 주소 페이지로 이동 ??

$id=$_GET['id'];
$sql = "SELECT * FROM topic WHERE id =".$id;
echo $sql;
// index.php 실행하면 일단 DB내 모든 타이틀값과 "SELECT ... id =" 까지 출력 후 링크 클릭 시 해당 id 값이 뒤에 출력됨
?>