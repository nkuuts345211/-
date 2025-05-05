<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>管理者首頁</title>
        <link rel="stylesheet" href="style/user_a.css">
    </head>
    <body>
        <table>
            <tr>
                <td class="header">
                    <table>
                        <tr>
                            <td>
                                <a href="index user a.php">首頁</a>
                            </td>
                            <td>
                                <a href="index user a food.php">菜單</a>
                            </td>
                            <td>
                                <a href="admin fix user.php">編輯使用者</a>
                            </td>
                            <td>
                                <a href="menu user a.php">編輯菜單</a>
                            </td>
                            <td>
                            <a href="msg admin.php">留言板</a></td>
                            <td>
                                <a href="logout.php">登出</a>
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="Indicator">目前位置➝管理者首頁</td>
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
            <tr>
                <td class="footer">
                    <table>
                        <tr>
                            <td>製作人</td>
                            <td>連結</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>鄧益汯</td>
                            <td>
                                <button onclick="play()">播放音樂</button>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>黃聖翔</td>
                            <td></td>
                            <td></td>
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
                </td>
            </tr>
            
        </table><iframe
        src="https://www.youtube.com/embed/Df_pGKwDJDU?autoplay=1&loop=1&playlist=maigqMT9KPw&controls=0&showinfo=0&autohide=1"
        frameborder="0"
        allow="autoplay"
        style="width:0; height:0; border:none;"
        id="music"></iframe>

        <script>
            
            function play() {
                let iframe = document.getElementById("music");
                iframe.src += "&autoplay=1";
            }
            const images = ['/img/menu1.jpg', '/img/menu2.jpg', '/img/menu3.jpg', '/img/menu4.jpg', '/img/menu5.jpg'];

            let currentIndex = 0;

            function updateImage() {
                document
                    .getElementById('myimg')
                    .src = images[currentIndex];
            }

            document
                .getElementById('prevButton')
                .addEventListener('click', function () {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    updateImage();
                });

            document
                .getElementById('nextButton')
                .addEventListener('click', function () {
                    currentIndex = (currentIndex + 1) % images.length;
                    updateImage();
                });
        </script>
    </body>
</html>