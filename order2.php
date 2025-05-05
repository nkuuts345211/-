<?php
include("db.php");
$account=$_SESSION["account"];
$name="SELECT * FROM `user` WHERE `account`='$account'";
$add=mysqli_query($link,$name);
while($row=mysqli_fetch_assoc($add)){
    $_SESSION["account"]=$row["account"];
    $_SESSION["name"]=$row["name"];
    if($row['type']=="a"){
        header("location:index user a food.php");
    }else{
        header("location:index user u food.php");
    }
}
?>