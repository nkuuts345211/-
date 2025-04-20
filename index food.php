<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>菜單</title>
        <link rel="stylesheet" href="style/food.css">
    </head>
    <body>
        <table>
            <tr>
                <td class="header">
                    <table>
                        <tr>
                            <td>
                                <a href="index.php">首頁</a>
                            </td>
                            <td>
                                <a href="index food.php">菜單</a>
                            </td>
                            
                            <td>
                                <a href="index login.php">訂餐</a>
                            </td>
                            <td>
                                <a href="index login.php">登入</a>
                            </td>
                            <td>
                                <a href="add user.php">註冊</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="Indicator">目前位置➝菜單</td>
            </tr>
            <?php
            include ("db.php");
            $sql="SELECT * FROM `food` WHERE 1";
            echo "<tr>";
                echo "<td class='content'>";
                echo "<table>";
                echo "<tr>";

                $res=mysqli_query($link,$sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<table style='width:700px' border='2' align='center'>";
                        echo "<tr style='height:50px'>";
                        echo "<td colspan='2'>".'品名:'.$row["c_name"]."</td>";
                        
                        echo "</tr>";
                        echo "<tr style='height:400px'><td colspan='2'>"."<img src='img/".$row['img']."' style='width:300px'><br>".$row["text"]."</td></tr>";
                        echo "<tr style='height:50px'>";
                        echo "<td>".'$$:'.$row["c_money"]."</td>";
                         echo "</tr>";
                        echo "<br>";
                        echo "</table>";
                        
                    }
                }
            //    echo  "<td><img src='\img\menu1.jpg'><p>菜單介紹</p><p>價格</p></td>";
            echo "</tr>";
                echo "</table>";
                echo "</td>";
            echo "</tr>";
            ?>
            
      
        </table>
        
    </body>
</html>
