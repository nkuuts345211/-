<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
div a{
    color:#222;
    text-decoration: none;
}
        
    .login-button {
      background-color: #222;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 25px;
      font-size: 16px;
      width: 30%;
      cursor: pointer;
      margin-top: 10px;
    }
    </style>
    
<?php
include("db.php");
$id=$_GET["id"];

$sql="SELECT * FROM `msg` WHERE `id`=$id";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
            echo "<form action='fixmsg2.php' method='post' align='center' enctype='multipart/form-data'>";
            echo "<div><a href='msglobby.php'><h1>回上一頁</h1></a></div>";
            echo "<h2 align='center'>修改留言</h2>";
            echo "<table align='center' border='1px soild black' style='height:400px;'>";
            echo "<tr><td style='width:90px;' align='center'>title</td><td><input type='text' name='title' value='".$row["title"]."'></td></tr>";
            echo "<tr><td style='width:90px;' align='center'>text</td><td><input type='text' name='text' value='".$row["text"]."'></td></tr>";
            echo "<tr><td style='width:90px;' align='center'>img</td><td><input type='file' name='img' accept='image/*'><br><span>目前檔案名稱：".$row['img']."</span></td></tr>";
 echo "<tr><td colspan='2' align='center'><img src='msgimg/".$row["img"]."' width='100'></td></tr>";
echo "<input type='hidden' name='id' value='".$row["id"]."'><input type='hidden' name='add_time' value='".$row["add_time"]."'>";
            echo "<input type='hidden' name='id' value='".$row["id"]."'><input type='hidden' name='add_time' value='".$row["add_time"]."'>";
            echo "<tr><td colspan='2'><input type='submit' class='login-button' value='送出'></td></tr>";
            echo "</table>";
            echo "</form>";
                    }
                }
?>
</body>
</html>