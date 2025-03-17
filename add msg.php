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
                    <a href="">首頁</a>
                </td>
                <td>
                    <a href="">菜單</a>
                </td>
                <td>
                    <a href="">訂餐</a>
                </td>
                <td>
                    <a href="">查看訂單 </a>
                </td>
                <td>
                    <a href="">登出</a>
                </td>
            </tr>
            
            <tr >
            <tr >
               <td></td>
               <td colspan="3" ><TEXTAREA NAME="feedback" id="feedback" ROWS="12" COLS="60" placeholder="想說甚麼都可以" class="BG-Copy"
                style="border:2px #2f3944 solid;"></TEXTAREA><br><button name='submit'>送出</button><button name='submit'>清除</button></td>
               <td> </td>
            </tr>
                <table>
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td ><a href="">留言板</a></td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td rowspan="2">
                            <button onclick="play()" class="button1">播放音樂按鈕</button>
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
            </tr>

        </table>
        <iframe
            id="music"
            src="https://youtube.com/embed/maigqMT9KPw?si=SHHwMfUWOepodXwr&controls=0&showinfo=0&autohide=1"
            frameborder="0"
            allow="autoplay"
            style="width:0; height:0; border:none;"></iframe>
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
