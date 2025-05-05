<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php")?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者留言板</title>
</head>
<body align="center">
<style>
    body{
        margin: 0;
        font-family:'DFKai-sb';font-size: 22px;
    }
        .head{
            text-align: center;
            background-color: lightblue;
            font-size: 24px;
            font-weight: bold;
            margin-inline: auto;
            width: 100%;
        }
        .head a{
            text-decoration: none;
        }
    </style>
    <!-- <style>
        .head{
            text-align: center;
        }
    </style> -->
<div class="head">
    <table align="center" style="width:100%;">
        <tr>
            <td><a href="index user a.php">首頁</a></td>
            <td><a href="index user a food.php">菜單</a></td>
            <td><a href="order.php">訂餐</a></td>
            <td><a href="logout.php">登出</a></td>
        </tr>
    </table>
</div>
<form action="add2.php" method="post">
    <h1>😎留言版<br>歡迎<?php echo $_SESSION['name']; ?></h1>
    <input type="button" value="新增" onclick=location.href="add.php?id='.$row['id'].'">
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
                echo "<tr style='height:400px'><td colspan='2'>".'留言:'.$row["text"]."</td></tr>";
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