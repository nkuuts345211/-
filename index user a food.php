<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者菜單</title>
    <link rel="stylesheet" href="style/food.css">
    <style>
        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .menu-card {
   width: calc(20% - 20px); /* 每列 5 張圖，留出間距 */
    box-sizing: border-box;
    height: 460px;
    display: flex;
    flex-direction: column;
}

        .menu-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
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
    <div class="Indicator" align="center">目前位置➝admin菜單</div>

    <div class="menu-container">
        <?php
        include("db.php");
        $sql = "SELECT * FROM `food`";
        $res = mysqli_query($link, $sql);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
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
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
