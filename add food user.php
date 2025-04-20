<?php
include("db.php");
$c_name=$_POST["c_name"];
$c_money=$_POST["c_money"];
$text=$_POST["text"];
$img=$_POST["img"];
$c_num=$_POST["c_num"];
$account=$_SESSION["account"];

$id=$_POST["id"];
$sql="DELETE FROM `food` WHERE `id`=$id";
mysqli_query($link,$sql);
 
$sql="INSERT INTO `food`(`id`, `c_num`, `c_name`, `c_money`, `img`, `add_time`, `text`) VALUES ('$id','$c_num','$c_name','$c_money','$img',NOW(),'$text')";
    mysqli_query($link,$sql);
      $name="SELECT * FROM `user` WHERE `account`='$account'";
        $add=mysqli_query($link,$name);
        while($row=mysqli_fetch_assoc($add)){
            $_SESSION["account"]=$row["account"];
            $_SESSION["name"]=$row["name"];
            if($row['type']=='o'){
                header("location:menu%20user%20o.php");
            }else{
                header("location:menu%20user%20a.php");
            }
        }

    
    
?>