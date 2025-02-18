<?php
include "db.php";
$id=$_GET["id"];
$name=$_GET["name"];
$account=$_GET["account"];
$password=$_GET["password"];
$sql="UPDATE `user` SET `name`='$name',`account`='$account',`password`='$password' WHERE `id`='$id'";
$res=mysqli_query($link,$sql);
echo "<script>location.href='main.php'</script>";
?>