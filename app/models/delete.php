<?php


$num = $_GET["num"];
$page = $_GET["page"];
$table = $_GET["table"] . "_comments";
$id = $_GET['id'];

echo $id;
echo $num;
$con = mysqli_connect("localhost", "user", "passwd", "sample");
$sql = "DELETE FROM $table WHERE num=$num and id='$id'";
mysqli_query($con, $sql);

mysqli_close($con);



?>