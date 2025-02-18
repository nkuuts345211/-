<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `user` WHERE `id` = $id";
mysqli_query($link,$sql);
echo "<script>location.href='main.php'</script>";
?>