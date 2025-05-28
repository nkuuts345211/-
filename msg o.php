<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("db.php")?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>賣家留言板</title>
    </head>
    <body align="center">
        <style>
            body {
                margin: 0;
                font-family:'DFKai-sb';font-size: 22px;
            }
            .head {
                text-align: center;
                background-color: lightgreen;
                font-size: 24px;
                font-weight: bold;
                margin-inline: auto;
                width: 100%;
            }
            .head a {
                text-decoration: none;
            }
            .reply-section {
        background-color: #f9f9f9;
        margin: 10px 0;
        padding: 10px;
        border-left: 3px solid #007bff;
    }
    .reply-form {
        background-color: #f0f8ff;
        padding: 15px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .reply-item {
        background-color: #ffffff;
        margin: 5px 0;
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 3px;
    }
    .reply-toggle {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;
    }
    .reply-toggle:hover {
        background-color: #0056b3;
    }
        </style>
        <div class="head">
            <table align="center" style="width:100%;">
                <tr>
                    <td>
                        <a href="index user o.php">首頁</a>
                    </td>
                    <td>
                        <a href="index user o food.php">菜單</a>
                    </td>
                    <td>
                        <a href="menu user o.php">編輯菜單</a>
                    </td>
                    <td>
                        <a href="logout.php">登出</a>
                    </td>
                </tr>
            </table>
        </div>
        <form action="add2.php" method="post">
            <h1>😎留言版<br>歡迎<?php echo $_SESSION['name']; ?></h1>

            <input type="button" value="新增留言" onclick="location.href='add.php'">
        <?php
$sql="SELECT * FROM `msg` WHERE 1 ORDER BY id DESC";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "<table style='width:700px' border='2' align='center'>";
        echo "<tr style='height:50px'>";
        echo "<td>".'title:'.$row["title"]."</td>";
        echo "<td>".'帳號:'.$row["account"]."</td>";
        echo "</tr>";                
        echo "<tr style='height:400px'><td colspan='2'>".'留言:'.$row["text"]."<br>";
        
        // Display image if exists
        if(!empty($row["img"])) {
            echo "<img src='msgimg/".$row["img"]."' style='max-width:300px; max-height:200px;'>";
        }
        echo "</td></tr>";

        echo "<tr style='height:50px'>";
        echo "<td>".'發佈時間:'.$row["add_time"].'　更新時間:'.$row["up_time"]."</td>";
        
        echo "<td>";
                if($row["account"]==$_SESSION["account"]){
                echo "<input type='button' value='修改' onclick=\"location.href='fixmsg.php?id=".$row['id']."'\">";
        echo "<input type='button' value='刪除' onclick=\"location.href='del.php?id=".$row['id']."'\">";
                }else{

                }
                echo "<button type='button' class='reply-toggle' onclick=\"toggleReply(".$row['id'].")\">回覆</button>";
                echo "</td>";
        
        echo "</tr>";
        echo "</table>";
        
        // Reply section
        echo "<div class='reply-section' style='width:700px; margin:0 auto;'>";
        
        // Display existing replies
        $reply_sql = "SELECT r.*, u.name FROM `reply` r LEFT JOIN `user` u ON r.account = u.account WHERE r.msg_id = ".$row['id']." ORDER BY r.add_time ASC";
        $reply_res = mysqli_query($link, $reply_sql);
        
        if(mysqli_num_rows($reply_res) > 0) {
            echo "<h4>回覆 (".mysqli_num_rows($reply_res)."):</h4>";
            while($reply_row = mysqli_fetch_assoc($reply_res)) {
                echo "<div class='reply-item'>";
                echo "<strong>".($reply_row['name'] ? $reply_row['name'] : $reply_row['account'])."</strong> ";
                echo "<small>(".$reply_row['add_time'].")</small>";
                
                // Add delete button for admin or reply owner
                if( $_SESSION['account'] == $reply_row['account']) {
                    echo " <button onclick=\"if(confirm('確定要刪除這個回覆嗎？')) location.href='delete_reply.php?id=".$reply_row['id']."'\" style='background-color:#dc3545; color:white; border:none; padding:2px 5px; font-size:10px; border-radius:2px; cursor:pointer;'>刪除</button>";
                }
                
                echo "<br>";
                echo "<p>".$reply_row['reply_text']."</p>";
                echo "</div>";
            }
        } else {
            echo "<p style='color:#666;'>目前沒有回覆</p>";
        }
        
        // Reply form (initially hidden)
        echo "<div id='reply-form-".$row['id']."' class='reply-form' style='display:none;'>";
        echo "<form action='add_reply.php' method='post'>";
        echo "<input type='hidden' name='msg_id' value='".$row['id']."'>";
        echo "<textarea name='reply_text' rows='3' cols='60' placeholder='輸入您的回覆...' required></textarea><br><br>";
        echo "<input type='submit' value='送出回覆' style='background-color:#28a745; color:white; padding:8px 15px; border:none; border-radius:3px; cursor:pointer;'>";
        echo "<input type='button' value='取消' onclick=\"toggleReply(".$row['id'].")\" style='background-color:#6c757d; color:white; padding:8px 15px; border:none; border-radius:3px; cursor:pointer; margin-left:10px;'>";
        echo "</form>";
        echo "</div>";
        
        echo "</div>";
        echo "<br>";
    }
}
    ?>

        </form>
        
<script>
function toggleReply(msgId) {
    var replyForm = document.getElementById('reply-form-' + msgId);
    if (replyForm.style.display === 'none') {
        replyForm.style.display = 'block';
    } else {
        replyForm.style.display = 'none';
    }
}
</script>

    </body>
</html>