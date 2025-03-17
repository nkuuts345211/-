<?php
include("db.php");
$account=$_SESSION["account"];
$title=$_POST["title"];
$text=$_POST["text"];
$img="";
if(!empty($_FILES["img"]["name"])){
    $img="img/".$_FILES["img"]["name"];
    move_uploaded_file($_FILES["img"]["name"],$img);
}
$sql="INSERT INTO `msg`(`id`, `account`, `title`, `text`, `img`, `add_time`, `up_time`) VALUES (null,'$account','$title','$text','$img',NOW(),null)";
$res=mysqli_query($link,$sql);
echo "<script>location.href='main.php'</script>";
?>