<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table,td{
            border: 1px black solid;
            margin-inline: auto;
        }
        
    </style>
    <div>
    <h3>帳號權限介紹</h3><br>
    <h4>a=管理者</h4>
    <h4>u=使用者</h4>
    <h4>o=賣家</h4>
    </div>
    <form action="fix user2.php" method="get">
<?php
include ("db.php");
$id=$_GET["id"];
$sql="SELECT * FROM `user` WHERE `id`=$id";
$res=mysqli_query($link,$sql);

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<table>";
    echo "<tr>";
    echo "<td>帳號</td>";
    echo "<td><input type='text' name='type' value='".$row["type"]."'></td>";
    echo "</tr>";
    echo "<input type='hidden' name='id' value='".$row['id']."'>";
    echo "<tr><td><input type='submit' value='送出'></td></tr>";
  
    echo "</table>";
  }

}


?>
    </form>
</body>
</html>