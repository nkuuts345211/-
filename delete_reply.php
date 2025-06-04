<?php
session_start();
include("db.php");



// 檢查是否提供了回復ID
if (isset($_GET['id'])) {
    $reply_id = mysqli_real_escape_string($link, $_GET['id']);
    
    // 取得回覆資訊以檢查所有權
    $check_sql = "SELECT account FROM `reply` WHERE id = '$reply_id'";
    $check_result = mysqli_query($link, $check_sql);
    
    if (mysqli_num_rows($check_result) > 0) {
        $reply_data = mysqli_fetch_assoc($check_result);
        
        // 檢查使用者是否有刪除權限（管理員或回覆擁有者）
        if ($_SESSION['type'] == 'a' || $_SESSION['account'] == $reply_data['account']) {
            
            // 刪除回覆
            $delete_sql = "DELETE FROM `reply` WHERE id = '$reply_id'";
            
            if (mysqli_query($link, $delete_sql)) {
                echo "<script>alert('回覆已刪除！'); window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
            // } else {
            //     echo "<script>alert('刪除失敗：" . mysqli_error($link) . "'); history.back();</script>";
            }
        
    } else {
        echo "<script>alert('回覆不存在！'); history.back();</script>";
    }
} else {
    echo "<script>alert('無效的請求！'); history.back();</script>";
}
}

?>