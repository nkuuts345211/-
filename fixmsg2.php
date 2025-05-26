<?php
include("db.php");

// 取得表單資料
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$add_time = $_POST['add_time']; // 沒改變的話沿用
$up_time = date("Y-m-d H:i:s"); // 更新時間
$account=$_SESSION["account"];

// 先從資料庫取得舊圖片檔名
$sql_select = "SELECT img FROM msg WHERE id = ?";
$stmt = mysqli_prepare($link, $sql_select);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$old_img = $row['img'];

// 處理圖片上傳// 先取得原本的圖片檔名
$old_img = $row['img'];

if ($_FILES['img']['error'] == 0) {
    // 使用者有上傳新圖片
    $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
    $new_img_name = date("YmdHis") . rand(1000, 9999) . "." . $ext;
    move_uploaded_file($_FILES['img']['tmp_name'], "msgimg/" . $new_img_name);

    // 可選：刪除舊圖片
    if (file_exists("msgimg/" . $old_img)) {
        unlink("msgimg/" . $old_img);
    }
} else {
    // 使用者沒選圖片 → 使用舊圖片
    $new_img_name = $old_img;
}


// 更新資料庫
$sql_update = "UPDATE msg SET title=?, text=?, img=?, add_time=?, up_time=? WHERE id=?";
$stmt = mysqli_prepare($link, $sql_update);
mysqli_stmt_bind_param($stmt, "sssssi", $title, $text, $new_img_name, $add_time, $up_time, $id);
mysqli_stmt_execute($stmt);

// 跳轉回首頁或提示
    $name = "SELECT * FROM `user` WHERE `account`='$account'";
    $add = mysqli_query($link, $name);

    while ($row = mysqli_fetch_assoc($add)) {
        $_SESSION["account"] = $row["account"];
        $_SESSION["name"] = $row["name"];

        if ($row["type"] == 'a') {
            header("location:msg%20admin.php");
        } elseif ($row["type"] == 'u') {
            header("location:msg%20user.php");
        } else {
            header("location:msg%20o.php");
        }}
// echo "<script>alert('更新成功');location.href='index.php';</script>";
?>
