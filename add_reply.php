<?php

include("db.php");

// 檢查用戶是否已登入
if (!isset($_SESSION['account'])) {
    echo "<script>alert('請先登入！'); window.location.href='login.php';</script>";
    exit();
}

// 檢查是否收到表單數據
if ($_POST && isset($_POST['msg_id']) && isset($_POST['reply_text'])) {
    $msg_id = mysqli_real_escape_string($link, $_POST['msg_id']);
    $reply_text = mysqli_real_escape_string($link, $_POST['reply_text']);
    $account = mysqli_real_escape_string($link, $_SESSION['account']);
    $add_time = date('Y-m-d H:i:s');
    
    // 驗證輸入
    if (empty(trim($reply_text))) {
        echo "<script>alert('回覆內容不能為空！'); history.back();</script>";
        exit();
    }
    
    // 檢查原始訊息是否存在
    $check_msg = "SELECT id FROM `msg` WHERE id = '$msg_id'";
    $check_result = mysqli_query($link, $check_msg);
    
    if (mysqli_num_rows($check_result) == 0) {
        echo "<script>alert('原始留言不存在！'); history.back();</script>";
        exit();
    }
    
    // 將回覆插入資料庫
    $sql = "INSERT INTO `reply` (`msg_id`, `account`, `reply_text`, `add_time`) 
            VALUES ('$msg_id', '$account', '$reply_text', '$add_time')";
    
    if (mysqli_query($link, $sql)) {
        echo "<script>alert('回覆成功！'); window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
    } else {
        echo "<script>alert('回覆失敗：" . mysqli_error($link) . "'); history.back();</script>";
    }
} else {
    echo "<script>alert('資料不完整！'); history.back();</script>";
}

mysqli_close($link);
?>