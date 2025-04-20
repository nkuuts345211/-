<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `user` WHERE `id` = $id";
mysqli_query($link,$sql);
echo "<script>alert('刪除成功')</script>";
echo "<script>location.href='admin%20fix%20user.php'</script>";
?>