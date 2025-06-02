<?php
include("db.php");
$sql = "SELECT * FROM `food`";
$result = mysqli_query($link, $sql);

$images = [];
$text=[];

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $images[] = 'img/' . $row["img"];
            $text[] = $row["text"];
        }
    }
}


?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link rel="stylesheet" href="style/index.css">
    <style>
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
            flex-direction: column;
            height: 600px;
            margin-top: 30px;
        }
        #myimg {
            width: 600px;
            height: 80%;
            object-fit: cover;
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
        .dots {
            text-align: center;
            margin-top: 15px;
        }
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .dot.active {
            background-color: #717171;
        }
        .caption {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- 導覽列 -->
    <div class="header">
        <a href="index.php">首頁</a>
        <a href="index food.php">菜單</a>
        <a href="index login.php">訂餐</a>
        <a href="index login.php">登入</a>
        <a href="add user.php">註冊</a>
        <a href="about.php">關於</a>
    </div>

    <!-- 位置指示 -->
    <div class="indicator">目前位置 ➝ 首頁</div>

    <!-- 輪播區 -->
    <div class="carousel-container">
        <div style="display: flex; align-items: center;">
            <button class="carousel-button" id="prevButton">◀</button>
            <img src="img/menu1.jpg" id="myimg">
            <button class="carousel-button" id="nextButton">▶</button>
        </div>
        <div class="caption" id="caption">香酥炸雞腿</div>
        <div class="dots" id="dotsContainer"></div>
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
        const images = <?= json_encode($images) ?>;
    const captions = <?= json_encode($text) ?>;

        let currentIndex = 0;
        const imgElement = document.getElementById("myimg");
        const captionElement = document.getElementById("caption");
        const dotsContainer = document.getElementById("dotsContainer");

        // 建立原點按鈕
        images.forEach((_, index) => {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (index === 0) dot.classList.add("active");
            dot.addEventListener("click", () => {
                currentIndex = index;
                updateCarousel();
            });
            dotsContainer.appendChild(dot);
        });

        function updateCarousel() {
            imgElement.src = images[currentIndex];
            captionElement.textContent = captions[currentIndex];
            const dots = document.querySelectorAll(".dot");
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === currentIndex);
            });
        }

        document.getElementById("prevButton").addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateCarousel();
        });

        document.getElementById("nextButton").addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        });

        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        }, 4000);
    </script>

</body>
</html>
