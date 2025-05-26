<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菜單</title>
    <link rel="stylesheet" href="style/food.css">
    <style>
        img:hover {
            transform: scale(1.2); /*圖片放1.2倍*/
            transition: transform 0.3s ease;
        }

        .dd {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            display: none;
            z-index: 1000;
            text-align: left;
        }
        .dd-content {
            display: flex; /* 水平排列圖片與文字 */
            align-items: center; /* 垂直置中對齊 */
            gap: 20px; /* 圖片與文字之間的間距 */
        }

        .dd button {
            position: absolute;
            top: 5px;
            right: 10px;
        }

        .food {
            margin: 10px;
            text-align: center;
        }

        .food img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td class="header">
                <table>
                    <tr>
                        <td><a href="index.php">首頁</a></td>
                        <td><a href="index food.php">菜單</a></td>
                        <td><a href="index login.php">訂餐</a></td>
                        <td><a href="index login.php">登入</a></td>
                        <td><a href="add user.php">註冊</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5" align="center" class="Indicator">目前位置➝菜單</td>
        </tr>

        <tr>
            <td class='content'>
                <!-- 彈出區塊 -->
                <div class='dd'>
                    <button onclick='no()'>x</button>
                    <div class="dd-content">
                    <img id='aa' src="" alt="放大圖片">
                    <p id="desc"></p> <!-- 顯示文字說明 -->
                    <p id="price"></p>
                </div>
                </div>

                <div class="food">
                <?php
                include("db.php");
                $sql = "SELECT * FROM `food`";
                $res = mysqli_query($link, $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $img = $row['img'];
                        $price = $row['c_money'];
                        $desc = htmlspecialchars($row['text']);
                        echo "<div class='food'>";
                        echo "<img src='img/$img' onclick='check(\"$img\", \"$desc,價格:$price 元\")'>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>目前沒有菜單資料。</p>";
                }
                ?>
                </div>
            </td>
        </tr>
    </table>

    <script>
        function check(filename, text,price) {
            const popup = document.querySelector(".dd");
            document.getElementById("aa").src = "img/" + filename;
            document.getElementById("desc").innerText = text;
            popup.style.display = 'block';
        }

        function no() {
            document.querySelector(".dd").style.display = 'none';
        }
    </script>
</body>
</html>
