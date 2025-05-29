<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者首頁</title>
    <link rel="stylesheet" href="style/index.css">
    <style>
        /* 額外美化 */
        body, html {
            margin: 0;
            height: 100%;
            font-family: "微軟正黑體", sans-serif;
        }
        .header {
            background-color: #fb9600;
            text-align: center;
            padding: 10px 0;
        }
        .header a {
            color: white;
            margin: 0 30px;
            font-weight: bold;
            font-size: 20px;
        }
        .header a:hover {
            color: darkred;
            background-color: #fff8dc;
            padding: 5px;
            border-radius: 5px;
        }
        .indicator {
            background-color: #f4b968;
            text-align: center;
            padding: 5px;
            font-size: 18px;
        }
        .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
            margin-top: 30px;
        }
        #myimg {
            max-height: 400px;
            max-width: 80%;
            transition: opacity 0.5s;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .carousel-button {
            font-size: 24px;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 0 20px;
            cursor: pointer;
        }
        .carousel-button:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <!-- 導覽列 -->
    <div class="header">
        <a href="index user a.php">首頁</a>
        <a href="index user a food.php">菜單</a>
        <a href="admin fix user.php">編輯使用者</a>
        <a href="System management.php">系統管理</a>
        <a href="menu user a.php">編輯菜單</a>
        <a href="order.php">訂單</a>
        <a href="msg admin.php">留言板</a>
        <a href="logout.php">登出</a>
    </div>

    <!-- 位置指示 -->
    <div class="indicator">目前位置 ➝ 管理者首頁</div>

    <!-- 輪播區 -->
    <div class="carousel-container">
        <button class="carousel-button" id="prevButton">◀</button>
        <img src="img/menu1.jpg" id="myimg">
        <button class="carousel-button" id="nextButton">▶</button>
    </div>

    <!-- 音樂 -->
    <iframe
        src="https://www.youtube.com/embed/Df_pGKwDJDU?autoplay=1&loop=1&playlist=maigqMT9KPw&controls=0&showinfo=0&autohide=1"
        frameborder="0"
        allow="autoplay"
        style="width:0; height:0; border:none;"
        id="music"></iframe>

    <!-- JS 輪播 -->
    <script>
        const images = [
            "img/menu1.jpg",
            "img/menu2.jpg",
            "img/menu3.jpg",
            "img/menu4.jpg",
            "img/menu5.jpg",

        ];
        let currentIndex = 0;
        const imgElement = document.getElementById("myimg");

        document.getElementById("prevButton").addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            imgElement.src = images[currentIndex];
        });

        document.getElementById("nextButton").addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % images.length;
            imgElement.src = images[currentIndex];
        });

        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            imgElement.src = images[currentIndex];
        }, 4000);
    </script>

</body>
</html>