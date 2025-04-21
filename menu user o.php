<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <?php include("db.php");?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>賣家菜單編輯</title>

    </head>
    <body>
        <style>
body,
html {
    height: 100%;
    margin: 0;
}
.a1{
    width: 100%;
    background-color: lightgreen;
    border-collapse: collapse;
}
.a1 td{
    width: 24%;
}
.a1 a{
    text-decoration: none;
}
/* 標題 */

            
        </style>
    </head>
    <body align="center">
<div class="a1">
    <table align="center">
        <tr>
            <td><a href="index user o.php">首頁</a></td>
            <td><a href="index user o food.php">菜單</a></td>
            <td><a href="menu user o.php">編輯菜單</a></td>
            <td><a href="msg o.php">留言板</a></td>
            <td><a href="logout.php">登出</a></td>
        </tr>
    </table>
</div>
        <tr>
            <td colspan="5" align="center">
                <h1>歡迎<?php echo $_SESSION['name']; ?>👍</h1>
            </td>
        </tr>
        <tr >
            <td class="content">
                <table>
                    <button type="button" onclick="location.href='add food.php'">新增菜單</button>
<form action="add%20food%20user%20o.php" method="get">
                    <?php
            $sql="SELECT * FROM `food` WHERE 1";
            $res=mysqli_query($link,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<table style='width:700px' border='2' align='center'>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'品名:'.$row["c_name"]."</td>";
                    echo "<td>".'編號:'.$row["c_num"]."</td>";
                    echo "</tr>";
                    echo "<tr style='height:400px'><td colspan='2'>"."<img src='img/".$row['img']."' style='width:300px'><br>".$row["text"]."</td></tr>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'發佈時間:'.$row["add_time"]."</td>";
                        echo "<td><button type='button' onclick=location.href='add%20food%20user%20o.php?id=".$row['id']."'>修改</button><input type='button' value='刪除' onclick=location.href='del%20food.php?id=".$row['id']."'></td>";
                    echo "</tr>";
                    echo "<br>";
                    echo "</table>";
                    echo "<input type='hidden' name='id' value=".$row['id'].">";
                }
            }
            
        ?></form>
        </td>
        </tr>
    </table>
</td>
</tr>

</table>

</body>
</html>