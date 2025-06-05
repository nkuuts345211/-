  <?php include("db.php");
    if (!isset($_SESSION['account'])) {
    echo "<script>alert('請先登入！'); window.location.href='login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>賣家菜單</title>
        <link rel="stylesheet" href="style/food.css">
    </head>
    <body>
        <style>
.food-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.food {
    width: 220px;
    text-align: center;
}

.menu-card {
    border: 1px solid #ccc;
    border-radius: 12px;
    background-color: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.2s ease;
}

.menu-card:hover {
    transform: translateY(-5px);
}

.menu-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    border-bottom: 1px solid #eee;
}

.menu-card-content {
    padding: 15px;
}

.menu-card-content h3 {
    font-size: 1.1em;
    margin: 0 0 8px;
    color: #333;
}

.menu-card-content p {
    font-size: 0.95em;
    color: #666;
}

/* 分類按鈕區樣式 */
.sort {
    text-align: center;
    margin: 20px 0;
}

.sort button {
    border: none;
    background-color: #f0f0f0;
    border-radius: 20px;
    padding: 8px 16px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 0.95em;
}

.sort button:hover {
    background-color: #ddd;
}

</style>

        <table>
            <tr>
                <td class="header">
                    <table>
                        <tr>
                            <td>
                                <a href="index user o.php">首頁</a>
                            </td>
                            <td>
                                <a href="index user o food.php">菜單</a>
                            </td>
                            
                            <td>
                                <a href="menu user o.php">編輯菜單</a>
                            </td>
                            <td>
                            <a href="msg o.php">留言板</a></td>
                            <td>
                                <a href="logout.php">登出</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5" align="center" class="Indicator">目前位置➝賣家菜單</td>
            </tr>
            <tr align="center">
    <td colspan="5" class="sort">
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
        <td class='content'>
        <div class="food-container" id="foodContainer">
            <?php
            
            $sql="SELECT * FROM `food`";
            
                $res=mysqli_query($link,$sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
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
        </div>
      
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
