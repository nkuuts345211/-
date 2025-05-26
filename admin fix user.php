<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯使用者權限</title>
    <style>
        
body {
    font-family:'DFKai-sb';font-size: 22px;
}
body,
html {
height: 100%;
margin: 0;
}

/* 標題 */
.header {
height: 30px;
text-align: center;
background-color: rgb(252, 153, 6);
font-size: 20px;
font-weight: bold;
}
/* 標題的連結 */
.header a{
color:white;
text-decoration: none;
}
/* 主畫面(中) */
.content {
height: 100%;
text-align: center;


}
/* 底部 */
.footer {
height: 50px;
text-align: center;
background-color: #d0d0d0;
position: relative;
}
/* 中間圖大小 */
#myimg{
height: 70%;
width: auto;
}
/* 指向 */
.Indicator{
background-color:rgb(245, 183, 91);
color: black;
font-size: 18px;
}
/* 連結 */
a{
text-decoration: none;
}
/* 滑鼠拖過去 */
a:hover{
background-color: lightblue;
color: darkred;
}
img {
width: 300px;
height: 300px;
border: 1px solid lightgray;
border-radius: 15px;
box-shadow: 3px 3px 2px lightgray;
}
.dd{
width: 600px;
height: 300px;
background-color: lemonchiffon;
position: absolute;
z-index: 10;
left:30%;
}
.food {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 20px;
}

.food div {
box-sizing: border-box;
}
@media(min-width:1024px) {
.food div {
width: calc(25%-20px);
}
}

 @media(min-width:800) {
.food div {
width: calc(50%-20px);
}
}

@media(max-width:799) {
.food div {
width: 100%;
}
}
    </style>
</head>
<body>

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
<table style="width: 100%;"><tr>
    <td colspan="5" align="center" class="Indicator">目前位置➝管理者修改頁面</td>
    </tr></table>
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