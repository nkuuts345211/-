<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body align="center">

        <link rel="stylesheet" href="style/style.css">

        <table >
            <tr id="top">
                <td>
                    <a href="index.html">首頁</a>
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
            <form action="msg user.php" method="get">
                <tr >
                    <td></td>
                    <td colspan="3">
                        <textarea
                            name="feedback"
                            id="feedback"
                            rows="12"
                            cols="60"
                            placeholder="想說甚麼都可以"
                            class="BG-Copy"
                            style="border:2px #2f3944 solid;"></textarea><br>
                        <button name='submit'>送出</button>
                        <button name='submit'>清除</button>
                    </td>
                    <td></td>
                </tr>
            </form>
            <tr >
                <table>
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td >
                            留言板
                        </td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>黃聖翔</td>
                        <td ></td>
                        <td ></td>
                    </tr>
                    <tr>
                        <td>黃子杰</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>楊恩愷</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </tr>

        </table>
    </body>
</html>