<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account = $_SESSION["account"];
    $id = intval($_POST["id"]);
    $buy_amount = isset($_POST["buy_amount"]) ? intval($_POST["buy_amount"]) : 1;

    // 取得商品資料
    $sql = "SELECT c_num, c_name, c_money FROM food WHERE id = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "找不到商品資料";
        exit();
    }

    $row = $result->fetch_assoc();
    $c_num = $row["c_num"];
    $c_name = $row["c_name"];
    $c_money = $row["c_money"] * 0.9;

    // 最終確認提交
    if (isset($_POST["amount"])) {
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
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>確認下訂</title>
</head><body>
<style>
    body {
        font-family: "Microsoft JhengHei", sans-serif;
        background: linear-gradient(to right, #f8f9fa, #e9ecef);
        margin: 0;
        padding: 40px;
    }
    .container {
        background-color: #ffffff;
        max-width: 500px;
        margin: auto;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }
    p {
        font-size: 18px;
        margin: 12px 0;
        color: #444;
    }
    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }
    input[type="number"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-top: 8px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
    }
    .button-group {
        margin-top: 30px;
        display: flex;
        gap: 10px;
    }
    .button-group input[type="submit"],
    .button-group button {
        flex: 1;
        padding: 12px;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }
    .button-group input[type="submit"] {
        background-color: #28a745;
        color: #fff;
    }
    .button-group input[type="submit"]:hover {
        background-color: #218838;
    }
    .button-group button {
        background-color: #dee2e6;
        color: #333;
    }
    .button-group button:hover {
        background-color: #ced4da;
    }
</style>

<div class="container">
    <form id="orderForm" method="post">
        <h2>訂購確認</h2>

        <p>帳號：<?php echo htmlspecialchars($account); ?></p>
        <p>品名：<?php echo htmlspecialchars($c_name); ?></p>
        <p>單價：<?php echo $c_money; ?></p>

        <label for="amount">數量：</label>
        <?php $default_amount = isset($buy_amount) ? $buy_amount : 1; ?>
        <input type="number" id="amount" name="amount" value="<?php echo $default_amount; ?>" min="1" required>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="buy_amount" value="<?php echo $default_amount; ?>">

        <div class="button-group">
            <input type="submit" value="確認下訂">
            <button type="button" onclick="history.back()">回上一頁</button>
        </div>
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
