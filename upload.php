<?php
$targetDir = "img/"; // 要儲存圖片的資料夾

// 確保資料夾存在，若不存在則建立
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}
$targetFile = $targetDir . basename($_FILES["img"]["name"]);

$imageFileType = strtolower(pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION));


// 檢查是否為圖片
$check = getimagesize($_FILES["img"]["tmp_name"]);
if ($check === false) {
    echo "檔案不是圖片。";
    exit;
}

// 限制檔案大小 (例如最大 2MB)
if ($_FILES["img"]["size"] > 2000000) {
    echo "檔案太大。";
    exit;
}

// 限制檔案格式
$allowedTypes = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedTypes)) {
    echo "只允許 JPG, JPEG, PNG, GIF 格式。";
    exit;
}

// 將檔案移到指定資料夾
if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
        header("location:add%20food2.php");
} else{
    echo "error";
}


?>
