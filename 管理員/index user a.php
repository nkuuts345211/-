<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body>
        <style>
            * {
                padding: 0px;
                margin: 0px;
            }
            body html {
                height: 100%;
            }
            table {
                width: 100%;
                border: 1px solid red;
                text-align: center;
            }

            #main {
                height: 80%;
                width: 80%;
            }
            #button {
                height: 80%;
                width: 10%;
            }
            #top {
                background-color: gray;
            }
            #footer{
margin-top:-50px ;
height:10%;
z-index: 9999;
            }
        </style>
        <table>
            <tr >
                <div >
                    <td >
                        <a href="http://localhost/%e9%a6%96%e9%a0%81/">
                            <img
                                src="https://th.bing.com/th/id/OIP.uJ3LwA66fuITtZYomVqz-AHaD4?w=339&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                                height="50px"
                                width="100px"></a>
                    </td>

                    <td>
                        <a href="">菜單</a>
                    </td>
                    <td>
                        <a href="">訂餐</a>
                    </td>
                    <td>
                        <a href="">刪除訂單</a>
                    </td>
                    <td>
                        <a href="">登出</a>
                    </td>
                </tr>
            </div>
            <tr>
                <td colspan="5">
                    <marquee
                        scrolldelay="10"
                        width="100%"
                        bgcolor="black"
                        behavior="scroll"
                        direction="right"
                        style="color: white;"
                        height="5%">資二忠餐廳訂餐系統</marquee>
                </td>
            </tr>
            <tr >
                <td class="button">
                    <button id="back" onclick="back()">back</button>
                </td>
                <td colspan="3" class="main"><img src="http://localhost/img/1.jpg" id="changeimg"></td>

                <td class="button">
                    <button id="next" onclick="next()">next</button>
                </td>
                <script>
                    var img = document.getElementById("changeimg");

                    var index = 0;
                    var a = ["http://localhost/img/1.jpg", "http://localhost/img/2.jpg", "http://localhost/img/3.jpg"]
                    var imgs = document.getElementsByTagName("img");
                    var len = a.length;
                    var al = document.getElementById("back");
                    var ar = document.getElementById("right");
                    var n = 0;
                    function next() {

                        imgs.src = a[n];
                        if (n < (len-1)) {
                            n++;
                        } else {
                            n = 0;
                        }
                    }
                    function back() {
                        imgs.src = a[n];
                        if (n > 0) {
                            n--;
                        } else {
                            n = (len - 1);
                        }
                    }
                </script>
            </tr>
            <tr>
                <table calss="footer">
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td rowspan="5">留言板</td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td></td>
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
    </body>
</html>