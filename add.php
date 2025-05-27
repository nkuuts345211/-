<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增留言</title>
    <style>
        body {
            font-family: "Helvetica", "Arial", sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 40px;
            color: #333;
        }

        form {
            display: inline-block;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        input[type="submit"], .back-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover, .back-button:hover {
            background-color: #0056b3;
        }

        .buttons {
            margin-top: 20px;
        }

        .back-button {
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>新增留言板</h1>
    <form action="add2.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>標題</td>
                <td><input type="text" name="title" required></td>
            </tr>
            <tr>
                <td>內文</td>
                <td><textarea name="text" rows="10" style="width: 100%;" required></textarea></td>
            </tr>
            <tr>
                <td>圖片</td>
                <td><input type="file" name="img" accept="image/*" required></td>
            </tr>
        </table>
        <div class="buttons">
            <input type="submit" value="送出">
            <a href="msg admin.php" class="back-button">回上一頁</a>
        </div>
    </form>
</body>
</html>
