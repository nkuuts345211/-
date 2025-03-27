<?php
include("db.php");
$account=$_SESSION["account"];
$title=$_POST["title"];
$text=$_POST["text"];

$name="SELECT * FROM `user` WHERE `account`='$account'";
$add=mysqli_query($link,$name);
$sql="INSERT INTO `msg`(`id`, `account`, `title`, `text`, `add_time`, `up_time`) VALUES (null,'$account','$title','$text',NOW(),null)";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($add)){
    $_SESSION["account"]=$row["account"];
    $_SESSION["name"]=$row["name"];
    if($row['type']=="a"){
        header("location:msg admin.php");
    }else{
        header("location:msg user.php");
    }
}

?>