<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <?php  include("db.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>菜單</title>
    <link rel="stylesheet" href="style/food.css">
    <style>
        .menu-card {
            height: 360px;
        }
        .food {
            margin: 10px;
            text-align: center;
        }
        .food-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .food img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            cursor: pointer;
        }
        .sort {
            text-align: center;
            margin: 20px 0;
        }

        .sort button {
            border-radius: 20px;
            padding: 8px 16px;
            margin: 5px;
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
        <tr align="center">
            <td  class="sort">
                <button onclick="filterFood('all')">全部</button>
                <button onclick="filterFood('主餐')">主餐</button>
                <button onclick="filterFood('炸物')">炸物</button>
                <button onclick="filterFood('湯品')">湯品</button>
                <button onclick="filterFood('飲品')">飲品</button>
                <button onclick="filterFood('點心')">點心</button>
            </td>
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

                <div class="food-container" id="foodContainer">
                <?php
                $sql = "SELECT * FROM `food`";
                $res = mysqli_query($link, $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $img = $row['img'];
                        $price = $row['c_money'];
                        $desc = htmlspecialchars($row['text']);
                        echo "<div class='food' data-category='".$row["option"]."'>";
                        echo "<div class='menu-card'>";
                        echo "<img src='img/" . $row['img'] . "' alt='" . $row['c_name'] . "'>";
                        echo "<div class='menu-card-content'>";
                        echo "<h3>品名: " . htmlspecialchars($row['c_name']) . "</h3>";
                        echo "<p>" . htmlspecialchars($row['text']) . "</p>";
                        echo "</div>";
                        echo "</div>";
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
        function filterFood(category) {
            const items = document.querySelectorAll(".food");
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // 預設顯示全部
        filterFood('all');
    </script>
</body>
</html>
