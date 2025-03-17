<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php")?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
<form action="add2.php" method="post">
    <h1>😎留言版<br>歡迎<?php echo $_SESSION['name']; ?>💀</h1>
    <input type="button" value="新增" onclick=location.href="addmsg.php?id='.$row['id'].'">
    <input type="button" value="新增使用者" onclick=location.href="adduser.php?id='.$row['id'].'">
    <?php
        $sql="SELECT * FROM `msg` WHERE 1";
        $res=mysqli_query($link,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<table style='width:700px' border='2' align='center'>";
                echo "<tr style='height:50px'>";
                echo "<td>".'title:'.$row["title"]."</td>";
                echo "<td>".'帳號:'.$row["account"]."</td>";
                echo "</tr>";
                echo "<tr style='height:400px'><td colspan='2'>".'留言:'.$row["text"]."<img src='".$row['img']."' style='width:300px'>"."</td></tr>";
                echo "<tr style='height:50px'>";
                echo "<td>".'發佈時間:'.$row["add_time"].'　更新時間:'.$row["up_time"]."</td>";
                    echo "<td><input type='button' value='刪除' onclick=location.href='del.php?id=".$row['id']."'></td>";
                echo "</tr>";
                echo "<br>";
                echo "</table>";
                
            }
        }
        
    ?>
    <input type="button" value="登出" onclick=location.href="logout.php">
    </form>
</body>
</html>