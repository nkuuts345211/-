<?php
include("db.php");
$account=$_POST["account"];
$password=$_POST["password"];
$sql="SELECT * FROM `user` WHERE `account`=$account";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    $sql="SELECT * FROM `user` WHERE `account`='$account' and `password`='$password'";
    $res=mysqli_query($link,$sql);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $_SESSION["account"]=$row["account"];
            $_SESSION["name"]=$row["name"];
            if($row['type']=="a"){
                header("location:main.php");
            }else{
                header("location:u_main.php");
            }
        }
    }else{
        header("location:index.php");
    }
}

?>