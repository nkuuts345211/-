<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("db.php"); ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>新增使用者</title>
  <style>
    html, body {
      margin: 0;
      height: 100%;
      background: white;
      font-family: Arial, sans-serif;
    }

    .header {
      height: 50px;
      text-align: center;
      background-color: rgb(252, 153, 6);
      font-size: 30px;
      font-weight: bold;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .header a {
      color: white;
      text-decoration: none;
      margin: 0 50px;
    }

    .login-title {
      color: white;
      text-align: center;
      margin-top: 20px;
      font-size: 32px;
    }

    .login-card {
      background: rgb(96, 130, 243);
      padding: 50px 50px;
      border-radius: 25px;
      box-shadow: 0 20px 30px rgba(53, 51, 51, 0.9);
      text-align: center;
      width: 400px;
      margin: 30px auto;
    }

    .login-card h2 {
      margin-bottom: 30px;
      font-weight: bold;
      color: white;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: white;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      font-size: 16px;
    }

    .login-button {
      background-color: #222;
      color: white;
      border: none;
      padding: 15px;
      border-radius: 25px;
      font-size: 16px;
      width: 100%;
      cursor: pointer;
      margin-top: 12px;
    }
  </style>
</head>
<body>

  <!-- 導覽列 -->
  <div class="header">
    <a href="index.php">首頁</a>
    <a href="index food.php">菜單</a>
    <a href="index login.php">登入</a>
  </div>

  <!-- 新增使用者卡片 -->
  <form action="adduser2.php" method="post">
    <div class="login-card">
      <h2>新增使用者</h2>

      <div class="input-group">
        <label for="account">帳號</label>
        <input type="text" name="account" id="account" required autocomplete="off">
      </div>

      <div class="input-group">
        <label for="password">密碼</label>
        <input type="text" name="password" id="password" required autocomplete="off">
      </div>

      <div class="input-group">
        <label for="password">確認密碼</label>
        <input type="text" name="pa" id="pa" required autocomplete="off">
      </div>

      <div class="input-group">
        <label for="name">你的名字</label>
        <input type="text" name="name" id="name" required autocomplete="off">
      </div>

      <button class="login-button" type="submit">送出</button>
    </div>
  </form>

</body>
</html>
