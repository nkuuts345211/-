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
            body,
            html {
                height: 100%;
                margin: 0;
            }
            table {
                width: 100%;
                height: 100%;
                border-collapse: collapse;
            }
            .head {
                height: 50px;
                text-align: center;
                background-color: blueviolet;
                font-size: 30px;
                font-weight: bold;
                display: flex;
            }
            .title{
                flex: 1;
                
            }
            
            .head a {
                text-decoration: none;
                color: white;
                
            }
        </style>
        <div class="head">
            <div class="title"><a href="index.php">首頁</a></div>
            <div class="title"><a href="index food.php">菜單</a></div>

            <div class="title"><a href="index login.php">登入</a></div>
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