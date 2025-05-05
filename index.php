<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body>
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
            <tr>
                <td class="footer">
                    <table>
                        <tr>
                            <td>製作人</td>
                            <td>連結</td>
                            <td> </td>
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

        </table>
        <!-- music -->
        <iframe
            src="https://www.youtube.com/embed/Df_pGKwDJDU?autoplay=1&loop=1&playlist=maigqMT9KPw&controls=0&showinfo=0&autohide=1"
            frameborder="0"
            allow="autoplay"
            style="width:0; height:0; border:none;"
            id="music"></iframe>

        <script>
            
            // music play
            function play() {
                let iframe = document.getElementById("music");
                iframe.src += "&autoplay=1";
            }
            // all picture
            const images = ['/img/menu1.jpg', '/img/menu2.jpg', '/img/menu3.jpg', '/img/menu4.jpg', '/img/menu5.jpg'];
            //設定原圖
            let currentIndex = 0;
            //更新圖片
            function updateImage() {
                document
                    .getElementById('myimg')
                    .src = images[currentIndex];
            }
            //上一張
            document
                .getElementById('prevButton')
                .addEventListener('click', function () {
                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                    updateImage();
                });
            //下一張
            document
                .getElementById('nextButton')
                .addEventListener('click', function () {
                    currentIndex = (currentIndex + 1) % images.length;
                    updateImage();
                });
        </script>
    </body>
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
/* 標題 */
.header {
    height: 50px;
    text-align: center;
    background-color: rgb(252, 153, 6);
    font-size: 20px;
    font-weight: bold;
}
/* 標題的連結 */
.header a{
    color:white;
    text-decoration: none;
}
/* 主畫面(中) */
.content {
    height: 100%;
    text-align: center;
    background-image: url('/img/OIP.jpg');
    background-size: cover;
    background-position: center;
    
}
/* 底部 */
.footer {
    height: 50px;
    text-align: center;
    background-color: #d0d0d0;
    position: relative;
}
/* 中間圖大小 */
#myimg{
    height: 70%;
    width: auto;
}
/* 指向 */
.Indicator{
    background-color: rgb(245, 183, 91);
    color: black;
    font-size: 18px;
}
/* 連結 */
a{
    text-decoration: none;
}
/* 滑鼠拖過去 */
a:hover{
    background-color: lightblue;
    color: darkred;
}
</style>
</html>
