<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <?php include("db.php");?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>賣家菜單編輯</title>
        <link rel="stylesheet" href="style/menuo.css">
    </head>
    <body>
        <table>
            <tr>
                <td class="header">
                    <table>
                        <tr>
                            <td>
                                <a href="index user o.php">首頁</a>
                            </td>
                            <td>
                                <a href="index user o food.php">菜單</a>
                            </td>
                            <td><a href="msg o.php">留言板</a></td>
                            
                            <td>
                                <a href="logout.php">登出</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center">
                    <h1>歡迎<?php echo $_SESSION['name']; ?>👍</h1>
                </td>
            </tr>
            <tr >
                <td class="content">
                    <table>
                        <form action="menu user a 2.php" method="post">

                            <button type="button" onclick="location.href='add food user o.php'">新增菜單</button>

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
                    echo "<tr style='height:400px'><td colspan='2'>".'留言:'.$row["text"]."<img src='".$row['img']."' style='width:300px'>"."</td></tr>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'發佈時間:'.$row["add_time"]."</td>";
                        echo "<td><button type='button' onclick='location.href='add food user a.php?id=".$row['id']."'>修改</button><input type='button' value='刪除' onclick=location.href='del menu.php?id=".$row['id']."'></td>";
                    echo "</tr>";
                    echo "<br>";
                    echo "</table>";
                    
                }
            }
            
        ?>
                        </form>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    <table>
                        <tr>
                            <td>製作人</td>
                            <td>連結</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>鄧益汯</td>
                            <td>
                                
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>黃聖翔</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>黃子杰</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>楊恩愷</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

    </body>
</html>