<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>首頁</title>
    </head>
    <body align="center">
        <style>
            body,
            html {
                margin: 0;
                height: 100%;
                padding: 0;

            }
            table {
                text-align: "center";
                border: 1px solid gray;
                width: 100%;
                border-collapse: collapse;

            }

            #top {
                height: 10%;
                background-color: gray;
            }
            img{
 width: 100%;
 margin-left: auto;
 margin-right: auto;
 margin-top: 20px;
 text-align: center;
}
.myimg{
 width: 70%;
 height:40%;
}
        </style>
        <table >
            <tr id="top">
                <td>
                    <a href="index.html">首頁</a>
                </td>
                <td>
                    <a href="index food.php">菜單</a>
                </td>
                <td>
                    <a href="add food user u.php">訂餐</a>
                </td>
                <td>
                    <a href="menu user u.php">查看訂單 </a>
                </td>
                <td>
                    <a href="logout.php">登出</a>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="back">back</button>
                </td>
                <td colspan="3" align="center"><img src="http://localhost/img/menu1.jpg" id="myimg" class="img"></td>
                <td>
                    <button id="next">next</button>
                </td>

            </tr>
            <tr >
                <table>
                    <tr>
                        <td>製作人</td>
                        <td>連結</td>
                        <td ><a href="add msg.php">留言板</a></td>
                    </tr>
                    <tr>
                        <td>鄧益汯</td>
                        <td>
                            
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
<script>
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