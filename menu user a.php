<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#a1{
    text-align: center;
    width: 46%;
    background-color: purple;
    margin-inline: auto;
    
}
#a1 a{
    color: white;
    text-decoration: none;
    font-family:'DFKai-sb';font-size: 28px;
}

    </style>
</head>
<body align="center">
    
    <div id="a1">
<table align="center" >
            <tr>
                <td class="header">
                    <table>
                        <tr>
                            <td>
                                <a href="index user a.php">首頁</a>
                            </td>
                            <td>
                                <a href="index user a food.php">菜單</a>
                            </td>
                            <td>
                                <a href="msg a.php">留言板</a>
                            </td>

                            <td>
                                <a href="logout.php">登出</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
</table>
    </div>
    <form action="menu user a 2.php" method="post">
        <h1>歡迎<?php echo $_SESSION['name']; ?>👍</h1>
        
        <button type="button" onclick="location.href='add food.php'">新增菜單</button>
        
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
                    echo "<tr style='height:400px'><td colspan='2'>"."<img src='".$row['img']."' style='width:300px'>".$row["text"]."</td></tr>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'發佈時間:'.$row["add_time"]."</td>";
                        echo "<td><button type='button' onclick='location.href='add food user a.php?id=".$row['id']."'>修改</button><input type='button' value='刪除' onclick=location.href='del menu.php?id=".$row['id']."'></td>";
                    echo "</tr>";
                    echo "<br>";
                    echo "</table>";
                    
                }
            }
            
        ?>
        <input type="button" value="登出" onclick=location.href="logout.php">
    </form>
</body>
</body>
</html>