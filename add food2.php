<?php
include("db.php");

$c_num=$_GET["c_num"];
$c_name=$_GET["c_name"];
$c_money=$_GET["c_money"];
$text=$_GET["text"];
$account=$_SESSION["account"];
$img="";
if(!empty($_FILES["img"]["name"])){
    $img="img/".$_FILES["img"]["name"];
    move_uploaded_file($_FILES["img"]["name"],$img);
}
$sql="INSERT INTO `food`(`id`, `c_num`, `c_name`, `c_money`, `img`, `add_time`,`text`) VALUES (null,'$c_num','$c_name','$c_money','$img',NOW(),'$text')";
mysqli_query($link,$sql);

$name="SELECT * FROM `user` WHERE `account`='$account'";
$add=mysqli_query($link,$name);
while($row=mysqli_fetch_assoc($add)){
    $_SESSION["account"]=$row["account"];
    $_SESSION["name"]=$row["name"];
    if($row['type']=="a"){
        header("location:menu user a.php");
    }elseif($row['type']=='o'){
        header("location:menu user o.php");
    }else{
        header("location:menu user u.php");
    }
}
?>