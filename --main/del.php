<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `msg` WHERE `id` = $id";
mysqli_query($link,$sql);
echo "<script>location.href='u_main.php'</script>";
?>