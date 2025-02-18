<?php
include ("db.php");
$id=$_GET["id"];
$c_num=$_GET["c_num"];
$c_name=$_GET["c_name"];
$c_money=$_GET["c_money"];
$sql="UPDATE `food` SET `c_num`='$c_num',`c_name`='$c_name',`c_money`='$c_money' WHERE `id`='$id'";
$res=mysqli_query($link,$sql);
echo "<script>location.href='main.php'</script>";
?>