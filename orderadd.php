<?php
include("db.php");

$id = $_POST["id"];
$amount = $_POST["buy_amount"];

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

    $insert_sql = "INSERT INTO `order` (account, c_num, c_name, c_money, amount) VALUES (?, ?, ?, ?, ?)";
    $insert_stmt = $link->prepare($insert_sql);
    $insert_stmt->bind_param("ssssi", $account, $c_num, $c_name, $c_money, $amount);

    if ($insert_stmt->execute()) {
        echo "<script>location.href='order.php'</script>";
    } else {
        echo "插入失敗：" . $insert_stmt->error;
    }

    $insert_stmt->close();
} else {
    echo "找不到該 id 對應的資料。";
}

$stmt->close();
$link->close();
?>