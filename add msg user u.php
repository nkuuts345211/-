<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>留言板</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <table>
            <tr>
                <td class="header">
                    <table>
                        <tr>
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
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="Indicator">目前位置➝留言板</td>
            </tr>
            <tr>
                <td class="content">
                    <table>
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
                                <a href="add msg.php">留言板</a>
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
