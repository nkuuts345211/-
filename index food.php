<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>菜單</title>
    </head>
    <body align="center">

        <link rel="stylesheet" href="style/style.css">

        <table >
            <tr id="top">
                <td>
                    <a href="/首頁/index.html">首頁</a>
                </td>
                <td>菜單
                </td>
                <td>
                    <a href="/首頁/index login.php">訂餐</a>
                </td>
                <td>
                    <a href="/首頁/index login.php">登入</a>
                </td>
                <td>
                    <a href="/管理員/add user.php">註冊</a>
                </td>
            </tr>
            <tr>
                <td colspan="5">目前位置➝菜單</td>
            </tr>
            <tr>
                <td><img src="/img/menu1.jpg" onclick="menu1()"></td>
                <td><img src="/img/menu2.jpg" onclick="menu2()"></td>
                <td><img src="/img/menu3.jpg" onclick="menu3()"></td>
                <td><img src="/img/menu4.jpg" onclick="menu4()"></td>
                <td><img src="/img/menu5.jpg" onclick="menu5()"></td>

            </tr>
            <tr >
                <table>
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td >
                            <a href="msg">留言板</a>
                        </td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>黃聖翔</td>
                        <td onclick="play()">播放音樂</td>
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
            alert('音樂部分需直接點擊文字');
            function menu1() {
                alert('餐點介紹1');
            }
            function menu2() {
                alert('餐點介紹2');
            }
            function menu3() {
                alert('餐點介紹3');
            }
            function menu4() {
                alert('餐點介紹4');
            }
            function menu5() {
                alert('餐點介紹5');
            }
            function play() {
                let iframe = document.getElementById("music");
                iframe.src += "&autoplay=1";
            }
            
        </script>

    </body>
</html>