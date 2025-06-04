<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者菜單</title>
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

        .menu-card-content {
            padding: 15px;
        }

        .menu-card-content h3 {
            margin: 0 0 10px;
            font-size: 1.1em;
            color: #222;
        }

        .menu-card-content p {
            font-size: 0.95em;
            color: #444;
        }

        .menu-card-content .price {
            color: #e91e63;
            font-weight: bold;
            margin-top: 10px;
        }

        .menu-card-content form {
            margin-top: 10px;
        }

        .menu-card-content input[type="number"] {
            width: 60px;
            padding: 5px;
        }

        .menu-card-content input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .menu-card-content input[type="submit"]:hover {
            background-color: #218838;
        }
        .sort {
            text-align: center;
            margin: 20px auto;
        }
        .menu-card {
    height: 360px;
    border: 1px solid #ccc; /* 加上灰色邊框 */
    border-radius: 10px;     /* 邊角圓滑 */
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); /* 陰影效果 */
    background-color: #fff;  /* 背景保持白色 */
    overflow: hidden;        /* 防止內容溢出 */
    transition: transform 0.2s ease;
}

.menu-card:hover {
    transform: translateY(-4px); /* 滑鼠移過去有輕微浮起效果 */
}

    </style>
</head>
<body>
    <div class="header">
        <table>
            <tr>
                <td><a href="index user a.php">首頁</a></td>
                <td><a href="index user a food.php">菜單</a></td>
                <td><a href="admin fix user.php">編輯使用者</a></td>
                <td><a href="menu user a.php">編輯菜單</a></td>
                <td><a href="msg admin.php">留言板</a></td>
                <td><a href="logout.php">登出</a></td>
            </tr>
        </table>
    </div>

    <!-- 指示列 -->
    <div colspan="5" class="Indicator" align="center">目前位置➝admin菜單</div>
        <tr align="center">
            <td  class="sort">
                <div class="sort">
                    <button onclick="filterFood('all')">全部</button>
                    <button onclick="filterFood('主餐')">主餐</button>
                    <button onclick="filterFood('炸物')">炸物</button>
                    <button onclick="filterFood('湯品')">湯品</button>
                    <button onclick="filterFood('飲品')">飲品</button>
                    <button onclick="filterFood('點心')">點心</button>
                </div>

            </td>
        </tr>
    <div class="menu-container">
        <div class="food-container" id="foodContainer">
        <?php
        include("db.php");
        $sql = "SELECT * FROM `food`";
        $res = mysqli_query($link, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<div class='food' data-category='".$row["option"]."'>";
                echo "<div class='menu-card'>";
                echo "<img src='img/" . $row['img'] . "' alt='" . $row['c_name'] . "'>";
                echo "<div class='menu-card-content'>";
                echo "<h3>品名: " . htmlspecialchars($row['c_name']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['text']) . "</p>";
                echo "<p class='price'>價格: $" . htmlspecialchars($row['c_money']) . "</p>";
                echo "<form action='orderadd.php' method='post'>";
                echo "數量: <input type='number' name='buy_amount' value='1' min='1' required>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' value='加入訂單'>";
                echo "</form>";
                echo "</div>"; // .menu-card-content
                echo "</div>"; // .menu-card
                echo "</div>"; // .food
            }

        }
        ?>
        </div>
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
    </div>
</body>
</html>
