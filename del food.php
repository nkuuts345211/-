<?php
include("db.php");
$id=$_GET["id"];
$sql="DELETE FROM `food` WHERE `id` = $id";
mysqli_query($link,$sql);

        header("location:menu%20user%20o.php");



?>