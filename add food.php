<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增商品</title>
</head>
<body>
    <form action="add%20food2.php" method="post" align="center" enctype="multipart/form-data">
        <h1>新增商品</h1>
        <table border="1px" align="center" width="500px">
            <tr>
                <td>商品編號</td>
                <td><input type="text" name="c_num" autocomplete="off" required></td>
                
            </tr>
            <tr>
                <td>商品名稱</td>
                <td><input type="text" name="c_name" autocomplete="off" required></td>
                
            </tr>
            <tr>
                <td>商品價錢</td>
                <td><input type="text" name="c_money" autocomplete="off" required></td>
                
            </tr>
            <tr>
                <td>圖片</td>
                <td><input type="file" name="img" accept="image/*" required></td>
                
            </tr>
            <tr>
                <td>介紹</td>
                <td><input type="text" name="text" style="height:200px" autocomplete="off" required></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送出"></td>
                
            </tr>
        </table>
    </form>
    
</form>
</body>
</html>