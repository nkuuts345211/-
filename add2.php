<?php
include("db.php");
$account=$_SESSION["account"];
$title=$_POST["title"];
$text=$_POST["text"];

$sql="INSERT INTO `msg`(`id`, `account`, `title`, `text`, `add_time`, `up_time`) VALUES (null,'$account','$title','$text',NOW(),null)";
$res=mysqli_query($link,$sql);
echo "<script>location.href='u_main.php'</script>";
?>