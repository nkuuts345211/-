<?php
include("db.php");
$account=$_SESSION["account"];
$title=$_POST["title"];
$text=$_POST["text"];

$sql="INSERT INTO `msg`(`id`, `account`, `title`, `text`, `add_time`, `up_time`) VALUES (null,'$account','$title','$text',NOW(),null)";
$res=mysqli_query($link,$sql);
$name="SELECT * FROM `user` WHERE `account`='$account'";
$add=mysqli_query($link,$name);
while($row=mysqli_fetch_assoc($add)){
    $_SESSION["account"]=$row["account"];
    $_SESSION["name"]=$row["name"];
    if($row['type']=="a"){
        header("location:msg admin.php");
    }elseif($row['type']=='o'){
        header("location:msg o.php");
    }else{
        header("location:msg user.php");
    }
}

?>