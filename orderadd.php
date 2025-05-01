<?php
// 資料庫連線設定
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 要轉移的 food 表資料 id
$food_id = 3; // 這裡可以改成你想要轉移的 id

// 從 food 表中取得資料
$sql = "SELECT c_num, c_name, c_money FROM food WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $food_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // 取出資料
    $row = $result->fetch_assoc();
    $c_num = $row["c_num"];
    $c_name = $row["c_name"];
    $c_money = $row["c_money"];

    // 將資料插入到 order 表中
    $insert_sql = "INSERT INTO `order` (c_num, c_name, c_money) VALUES (?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ssi", $c_num, $c_name, $c_money);

    if ($insert_stmt->execute()) {
        echo "資料成功轉移到 order 表中！";
    } else {
        echo "轉移失敗: " . $insert_stmt->error;
    }

    $insert_stmt->close();
} else {
    echo "找不到該 id 對應的資料。";
}

$stmt->close();
$conn->close();
?>
