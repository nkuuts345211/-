<?php
include("db.php");
$id=$_GET["id"];

$sql="DELETE FROM `food` WHERE `id` = $id";
mysqli_query($link,$sql);
if($_SESSION["type"]=="o"){
        header("location:menu%20user%20o.php");
}else{
        header("location:menu%20user%20a.php");
}


?>