<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body>
        <link rel="stylesheet" href="style/index.css">
        <table>
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
                                <a href="index login.php">訂餐</a>
                            </td>
                            <td>
                                <a href="index login.php">登入</a>
                            </td>
                            <td>
                                <a href="add user.php">註冊</a>
                            </td>
                            <td>
                                <a href="about.php">關於</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="Indicator">目前位置➝首頁</td>
            </tr>
            <tr >
                <td class="content">
                    <table>
                        <tr>
                            <td>
                                <button id="prevButton">back</button>
                            </td>
                            <td><img src="\img\menu1.jpg" id="myimg"></td>
                            <td>
                                <button id="nextButton">next</button>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
        <!-- music -->
        <iframe
            src="https://www.youtube.com/embed/Df_pGKwDJDU?autoplay=1&loop=1&playlist=maigqMT9KPw&controls=0&showinfo=0&autohide=1"
            frameborder="0"
            allow="autoplay"
            style="width:0; height:0; border:none;"
            id="music"></iframe>
<script src="script.js"></script>
    </body>
    
</html>
