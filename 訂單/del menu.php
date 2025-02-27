<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `food` WHERE `id` = $id";
mysqli_query($link,$sql);
echo "<script>location.href='u_main.php'</script>";
?>