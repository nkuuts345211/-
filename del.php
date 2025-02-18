<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `food` WHERE `id` = $id";
mysqli_query($link,$sql);
echo "<script>location.href='main.php'</script>";
?>