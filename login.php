<?php
include("db.php");
$account=$_GET["account"];
$password=$_GET["password"];
$sql="SELECT * FROM `user` WHERE `account`='$account'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    $sql="SELECT * FROM `user` WHERE `account`='$account' and `password`='$password'";
    $res=mysqli_query($link,$sql);
    
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $_SESSION["account"]=$row["account"];
            $_SESSION["name"]=$row["name"];
            if($row['type']=="a"){
                header("location:index user a.php");
            }elseif($row['type']=="o"){
                header("location:index user o.php");
            }else{
                header("location:index user u.php");
            }
        }
    }else{
        echo "<script>alert('帳號密碼錯誤，請重新登入')</script>";
        echo "<script>location.href='index.php'</script>";

    }
}else{
    echo "<script>alert('帳號密碼錯誤，請重新登入')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>
