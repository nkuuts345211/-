<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body{
        margin: 0;
    }
    .header{
        background-color: purple;
        margin-inline: auto;
        width: 100%;
        
    }
    .header a{
        text-decoration: none;
        color: white;
        font-size: 24px;
        font-weight: bold;
    }

</style>
<div class="header">
<table align="center" style="width:100%;">
    <tr>
        <td><a href="index user a.php">首頁</a></td>
        <td><a href="index user a food.php">菜單</a></td>
        <td><a href="menu user a.php">編輯菜單</a></td>
        <td><a href="msg admin.php">留言板</a></td>
        <td><a href="logout.php">登出</a></td>
    </tr>
</table>
</div>
<table border="1" align="center">
        <tr align="center">
            <td>name</td>
            <td>account</td>
            <td>password</td>
            <td>type</td>
            <td>編輯</td>
        </tr>    
<?php
include ("db.php");
$sql="SELECT * FROM `user` WHERE 1";
$res=mysqli_query($link,$sql);

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
    if($row["account"]==$_SESSION["account"]){

    }
    else{
    echo "<tr align='center'>";
    echo "<td>".$row["name"]."</td>";
    echo"<td>".$row["account"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row["type"]."</td>";
    echo "<td><input type='button' value='修改(權限)' onclick=location.href='fix%20user.php?id=".$row['id']."'><input type='button' value='刪除' onclick=location.href='del%20user.php?id=".$row['id']."'></td>";
    echo "</tr>";
    }
    }

}

?>

</table> </body>
</html>