<?php
session_start();
include("db.php");



// Check if reply ID is provided
if (isset($_GET['id'])) {
    $reply_id = mysqli_real_escape_string($link, $_GET['id']);
    
    // Get reply information to check ownership
    $check_sql = "SELECT account FROM `reply` WHERE id = '$reply_id'";
    $check_result = mysqli_query($link, $check_sql);
    
    if (mysqli_num_rows($check_result) > 0) {
        $reply_data = mysqli_fetch_assoc($check_result);
        
        // Check if user has permission to delete (admin or reply owner)
        if ($_SESSION['type'] == 'a' || $_SESSION['account'] == $reply_data['account']) {
            
            // Delete the reply
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