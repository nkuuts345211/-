<?php
include("db.php");
$c_name=$_POST["c_name"];
$c_money=$_POST["c_money"];
$text=$_POST["text"];
$account=$_SESSION["account"];

$id=$_POST["id"];
 
$sql="UPDATE `food` SET `c_name`='$c_name',`c_money`='$c_money',`text`='$text' WHERE `id`=$id";
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