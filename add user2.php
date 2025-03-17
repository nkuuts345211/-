<?php
include("db.php");
$account=$_SESSION["account"];
$password=$_SESSION["password"];
$name=$_SESSION["name"];

$sql="INSERT INTO `user`(`id`, `account`, `password`, `name`) VALUES (null,'$account','$password','$name')";
$res=mysqli_query($link,$sql);
echo "<script>location.href='index.html'</script>";
?>