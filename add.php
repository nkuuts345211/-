<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增留言</title>
</head>
<body>
    <form action="add2.php" method="post" align="center">
        <h1>新增留言板</h1>
        <table border="1px" align="center" width="500px">
            <tr>
                <td>TITLE</td>
                <td><input type="text" name="title"></td>
                
            </tr>
            <tr>
                <td>TEXT</td>
                <td><input type="text" name="text"  style="height:200px"></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送出"></td>
                
            </tr>
        </table>
    </form>
    
</body>
</html>