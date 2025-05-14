<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php"; ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂餐系統</title>
    <link rel="stylesheet" href="style/food.css">
</head>
<body align="center">

    <table class="header" style="height: 12%;">
        <tr>
            <td><a href="order2.php">菜單</a></td>
            <td><a href="order3.php">留言板</a></td>
            <td><a href="logout.php">登出</a></td>
        </tr>
        <tr>
            <td colspan="3" class="Indicator">目前位置➝訂餐系統</td>
        </tr>
    </table>

    <h1>購物車管理</h1>
    <h3>歡迎 <?php echo $_SESSION['name']; ?></h3>

    <div align="center">
    <table border="1" style="width:500px; margin-top:10px;">
    <form method="get">
        <tr>
            <td colspan="7">
                <input type="text" name="keyword" placeholder="輸入商品名稱搜尋" 
                    value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                <button type="submit" name="order" value="asc">ID升序</button>
                <button type="submit" name="order" value="desc">ID降序</button>
                <button type="submit">搜尋</button>
            </td>
        </tr>
    </form>

    <tr>
        <td>流水號</td>
        <td>帳號</td>
        <td>商品編號</td>
        <td>商品名稱</td>
        <td>價格</td>
        <td>數量</td>
        <td>小計</td>
    </tr>

    <?php
    $account=$_SESSION["account"];
    $sql = "SELECT * FROM `order` WHERE account ='$account'";
    if (!empty($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $sql .= " AND `c_name` LIKE '%$keyword%'";
    }
    if (!empty($_GET['order']) && in_array($_GET['order'], ['asc', 'desc'])) {
        $order = $_GET['order'];
        $sql .= " ORDER BY `id` $order";
    }
    $res = mysqli_query($link, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $subtotal = $row["c_money"] * $row["amount"];
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['account']}</td>";
            echo "<td>{$row['c_num']}</td>";
            echo "<td>{$row['c_name']}</td>";
            echo "<td>{$row['c_money']}</td>";
            echo "<td>{$row['amount']}</td>";
            echo "<td>{$subtotal}</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

        <h2>各使用者消費總金額</h2>
        <table border="1" style="width:300px;">
            <tr>
                <td>帳號</td>
                <td>總金額</td>
            </tr>
            <?php
            $sql_total = "SELECT account, SUM(c_money * amount) AS total FROM `order` WHERE account  ='$account' GROUP BY account ";
            $res_total = mysqli_query($link, $sql_total);
            while ($row = mysqli_fetch_assoc($res_total)) {
                echo "<tr>";
                echo "<td>{$row['account']}</td>";
                echo "<td>{$row['total']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</body>
</html>
