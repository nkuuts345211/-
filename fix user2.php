<?php
include ("db.php");
$id=$_GET["id"];
$type=$_GET["type"];
$sql="UPDATE `user` SET `type`='$type' WHERE `id`=$id";
$res=mysqli_query($link,$sql);
echo "<script>alert('修改成功')</script>";
echo "<script>location.href='index%20user%20a.php'</script>";
?>