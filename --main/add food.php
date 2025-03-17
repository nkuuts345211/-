<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="add food2.php" method="get" align="center">
        <h1>新增商品</h1>
        <table border="1px" align="center" width="500px">
            <tr>
                <td>商品編號</td>
                <td><input type="text" name="c_num"></td>
                
            </tr>
            <tr>
                <td>商品名稱</td>
                <td><input type="text" name="c_name"></td>
                
            </tr>
            <tr>
                <td>商品價錢</td>
                <td><input type="text" name="c_money"></td>
                
            </tr>
            <tr>
                <td>圖片</td>
                <td><input type="file" name="img"></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送出"></td>
                
            </tr>
        </table>
    </form>
    
</body>
</html>