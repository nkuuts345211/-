<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    
    .header{
        background-color: purple;
        margin-inline: auto;
        width: 4%;
        
    }
    .header a{
        text-decoration: none;
        color: white;
        font-size: 24px;
    }

</style>
<div class="header">
<table>
    <tr>
        <td><a href="index user a.php">首頁</a></td>
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
    echo "<tr align='center'>";
    echo "<td>".$row["name"]."</td>";
    echo"<td>".$row["account"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td>".$row["type"]."</td>";
    echo "<td><input type='button' value='修改' onclick=location.href='fix%20user.php?id=".$row['id']."'></td>";
    echo "</tr>";
    }

}

?>

</table> </body>
</html>