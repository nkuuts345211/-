<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11253413楊恩愷</title>
</head>
<body>
    <form action="user2.php" method="get" align="center">
        <h1>☆修改商品☆</h1>
        <table border="1px" align="center" width="500px">
        <?php
        $id=$_GET["id"];
        $sql="SELECT * FROM `user` WHERE `id`='$id'";
        $res=mysqli_query($link,$sql);
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
                echo "<form action='user2.php' method='get'>";
                echo "<tr>";
                echo "<td>會員名稱</td>";
                echo "<td><input type='text' name='name' value='".$row['name']."'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>會員帳號</td>";
                echo "<td><input type='text' name='account' value='".$row['account']."'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>會員密碼</td>";
                echo "<td><input type='text' name='password' value='".$row['password']."'></td>";
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
    </form>
    
</body>
</html>