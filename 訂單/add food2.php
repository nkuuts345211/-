<?php
include("db.php");
$id=$_GET["id"];
$c_num=$_GET["c_num"];
$c_name=$_GET["c_name"];
$c_money=$_GET["c_money"];
$img="";
if(!empty($_FILES["img"]["name"])){
    $img="img/".$_FILES["img"]["name"];
    move_uploaded_file($_FILES["img"]["name"],$img);
}
$sql="INSERT INTO `food`(`id`, `c_num`, `c_name`, `c_money`) VALUES (null,'$c_num','$c_name','$c_money')";
mysqli_query($link,$sql);
echo "<script>location.href='index user a.php'</script>";
?>