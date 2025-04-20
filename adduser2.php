<?php
include("db.php");
$account=$_POST["account"];
$password=$_POST["password"];
$name=$_POST["name"];

$sql="INSERT INTO `user`(`id`, `account`, `password`, `name`, `type`) VALUES (NULL,'$account','$password','$name','u')";
$res=mysqli_query($link,$sql);
echo "<script>alert('註冊成功，請重新登錄')</script>";
echo "<script>location.href='index.php'</script>";
?>