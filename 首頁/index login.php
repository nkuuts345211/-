<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style/style.css">
</head>
<body align="center">
    <!-- <script>
        alert('歡迎');
    </script> -->
    <div id="a1">
<table align="center" >
    <tr id="top">
                <td>
                    <a href="">首頁</a>
                </td>
                <td>菜單
                </td>
                <td>
                    <a href="">訂餐</a>
                </td>
                <td>
                    <a href="">登入</a>
                </td>
                <td>
                    <a href="">註冊</a>
                </td>
            </tr>
            <tr>
                <td colspan="5">目前位置➝菜單</td>
            </tr>
    </tr>
</table>
    </div>
    <h1 align="center">登入系統</h1>
    <form action="login menu.php" method="get">
        <table align="center" border="1">
<tr>
    <td>帳號</td>
    <td><input type="text" name="account" ></td>
</tr>
<tr>
    <td>密碼</td>
    <td><input type="text" name="password" ></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="送出"></td>
</tr>
        </table>
    </form>
</body>
</html>