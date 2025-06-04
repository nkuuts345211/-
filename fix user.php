<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改權限</title>
    <style>
        body {
            font-family: "Helvetica", "Arial", sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        a {
            color: #222;
            text-decoration: none;
        }

        h1, h2 {
            color: #333;
        }

        form {
            display: inline-block;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-button {
            background-color: #222;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #444;
        }

        .back-link {
            margin-top: 20px;
            display: inline-block;
        }

        .current-img {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    include("db.php");
    $id = $_GET["id"];

    $sql = "SELECT * FROM `user` WHERE `id`=$id";
    $res = mysqli_query($link, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<form action='fix%20user2.php' method='post'>";
            echo "<h2>修改權限</h2>";
            echo "<table>";
            
           echo "<tr><td style='width:90px;' align='right'>目前權限</td>";
if ($row['type'] == 'a') {
    echo "<td>管理員</td></tr>";
} elseif ($row['type'] == 'u') {
    echo "<td>使用者</td></tr>";
} elseif ($row['type'] == 'o') {
    echo "<td>賣家</td></tr>";
} 

            echo "<tr><td align='right'>可修改權限</td><td><select name='type'><option value='a'>管理員</option><option value='u'>使用者</option><option value='o'>賣家</option></select></td></tr>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<tr><td colspan='2' align='center'>
        <div style='display: flex; justify-content: center; gap: 10px; margin-top: 10px;'>
            <input type='submit' class='login-button' value='送出'>
            <a href='admin%20fix%20user.php' class='login-button' style='text-align: center; line-height: 36px;'>回上一頁</a>
        </div>
      </td></tr>";

            echo "</table>";
            echo "</form>";
        }
    } else {
        echo "<p>找不到留言資料</p>";
    }
    ?>
</body>
</html>
