<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1 align="center">訂餐系統</h1>
    <h3 align="center">:P😎歡迎<?php echo $_SESSION['name']; ?></h3> 
    <div id="aa">
    <table style="width:1000px" border="2" align="center">
        <tr>
            <td width="500px" align="center">
                <h1>餐點</h1>
            </td>
            <td width="500px" align="center">
                <h1>訂單</h1>
            </td>
        </tr>
        <tr>
        <td>
        <table border="1" style="width:500px" >
                
                
                <tr>
                    <td>餐點名稱</td>
                    <td>單價</td>
                    <td>數量</td>
                </tr>
                <?php
                $sql="SELECT * FROM `food` WHERE 1";
                
                $res=mysqli_query($link,$sql);
                
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<tr>";
                        echo "<td>" . $row["c_name"] . "</td>";
                        echo "<td>" . $row["c_money"] . "</td>";
                        echo "<td><input type='text' name='num'></td>";
                        echo "</tr>";
                    }
                }
                
                ?>
            
                
                </tr>
        </table>
        </td>
        </tr>
    </table>   
    </div>
        <button onclick="location.href='logout.php'">登出</button>
</body>
</html>