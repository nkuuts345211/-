<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11253413楊恩愷</title>
</head>
<body align="center">
        <h1>☆修改商品☆</h1>
        <table border="1px" align="center" width="500px">
        <?php
        $id=$_GET["id"];
        $sql="SELECT * FROM `food` WHERE `id`='$id'";
        $res=mysqli_query($link,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<form action='foodfix2.php' method='get'>";
                echo "<tr>";
                echo "<td>商品編號</td>";
                echo "<td><input type='text' name='c_num' value='".$row['c_num']."'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>商品名稱</td>";
                echo "<td><input type='text' name='c_name' value='".$row['c_name']."'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>商品價格</td>";
                echo "<td><input type='text' name='c_money' value='".$row['c_money']."'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='修改'></td>";
                echo "<td><input type='hidden' name='id' value='".$id."'></td>";
                echo "</tr>";
                echo "</form>";
            }
        }
        ?>
        
        </table>
        <h4>:-D</h4>
    
</body>
</html>