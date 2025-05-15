<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["c_num"])) {
    if (!isset($_SESSION["account"])) {
        echo "<script>alert('尚未登入'); location.href='login.php';</script>";
        exit();
    }

    $account = $_SESSION["account"];
    $c_num = $_POST["c_num"];
    $c_name = $_POST["c_name"];
    $c_money = $_POST["c_money"];
    $amount = intval($_POST["amount"]);

    $insert_sql = "INSERT INTO `order` (account, c_num, c_name, c_money, amount) VALUES (?, ?, ?, ?, ?)";
    $insert_stmt = $link->prepare($insert_sql);
    $insert_stmt->bind_param("sssii", $account, $c_num, $c_name, $c_money, $amount);

    if ($insert_stmt->execute()) {
        echo "<script>alert('下訂成功！即將跳轉'); location.href='order.php';</script>";
        exit();
    } else {
        echo "<script>alert('訂單新增失敗'); history.back();</script>";
        exit();
    }
}

// 頁面初始化，取得商品資料
$id = $_POST["id"] ?? null;
if (!$id) {
    echo "<script>alert('未提供商品 ID'); location.href='index.php';</script>";
    exit();
}

$sql = "SELECT c_num, c_name, c_money FROM food WHERE id = ?";
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $account = $_SESSION["account"];
    $c_num = $row["c_num"];
    $c_name = $row["c_name"];
    $c_money = $row["c_money"];
} else {
    echo "<script>alert('找不到商品資料'); location.href='index.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>確認下訂</title>
    <style>
        body {
            font-family: "Microsoft JhengHei", sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 40px;
        }
        .container {
            background-color: #fff;
            max-width: 500px;
            margin: auto;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            margin: 12px 0;
        }
        label {
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <form id="orderForm" method="post">
        <h2>訂購確認</h2>
        <p><strong>帳號：</strong><?php echo htmlspecialchars($account); ?></p>
        <p><strong>品名：</strong><?php echo htmlspecialchars($c_name); ?></p>
        <p><strong>單價：</strong>$<?php echo $c_money; ?></p>

        <label for="amount">數量：</label>
        <input type="number" id="amount" name="amount" value="1" min="1" required>

        <input type="hidden" name="c_num" value="<?php echo $c_num; ?>">
        <input type="hidden" name="c_name" value="<?php echo $c_name; ?>">
        <input type="hidden" name="c_money" value="<?php echo $c_money; ?>">

        <input type="submit" value="確認下訂">
        <button type="button" onclick="history.back()" style="margin-top: 10px; width: 100%; padding: 12px; font-size: 16px; background-color:antiquewhite; border: none; border-radius: 10px; cursor: pointer;">回上一頁</button>

    </form>
</div>

<script>
    document.getElementById("orderForm").addEventListener("submit", function(e) {
        e.preventDefault();
        let amount = document.getElementById("amount").value;
        if (amount < 1) {
            alert("請輸入有效數量！");
            return;
        }
        let confirmMsg = "帳號：<?php echo $account; ?>\n" +
                         "品名：<?php echo $c_name; ?>\n" +
                         "數量：" + amount + "\n\n" +
                         "確定要下訂嗎？";
        if (confirm(confirmMsg)) {
            this.submit();
        }
    });
</script>
</body>
</html>
