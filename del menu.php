<?php
include("db.php");
$id=$_GET["id"];
$account=$_SESSION["account"];
$sql="DELETE FROM `food` WHERE `id` = $id";
mysqli_query($link,$sql);
$name="SELECT * FROM `user` WHERE `account`='$account'";
$add=mysqli_query($link,$name);
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