<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>登入首頁</title>
        <style>
            
/* 標題 */body,
html {
    height: 100%;
    margin: 0;
}

table {
    width: 100%;
    height: 100%;
    border-collapse: collapse;
}
.header {
    height: 50px;
    text-align: center;
    background-color: blueviolet;
    font-size: 30px;
    font-weight: bold;
}
/* 標題的連結 */
.header a{
    color:white;
    text-decoration: none;
}

            
        </style>
    </head>
    <body align="center">
        <!-- <script> alert('歡迎'); </script> -->
        <div id="a1">
            <table align="center">
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
                                    <a href="add user.php">註冊</a>
                                </td>
                                
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
        </div>
        <h1 align="center">登入系統</h1>
        <form action="login.php" method="get">
            <table align="center" border="1" style="width: 40%;">
                <tr>
                    <td>帳號</td>
                    <td><input type="text" name="account"></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="送出"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
