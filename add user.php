<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增使用者</title>
</head>
<body>
    
<style>
        .head{
            text-align: center;
        }
    </style>
<div class="head">    
<a href="index.php">首頁</a>
    <a href="index food.php">菜單</a>
    
    <a href="index login.php">登入</a>
    </div>
    <form action="adduser2.php" method="get" align="center">
        <h1>新增使用者</h1>
        <table border="1px" align="center" width="500px">
            <tr>
                <td>帳號</td>
                <td><input type="text" name="account"></td>
                
            </tr>
            <tr>
                <td>密碼</td>
                <td><input type="text" name="password"></td>
                
            </tr>
            <tr>
                <td>你的名字</td>
                <td><input type="text" name="name"></td>
                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="送出"></td>
                
            </tr>
        </table>
        <h4>[]~(￣▽￣)~*</h4>
    </form>
    
</body>
</html>