<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>登入首頁</title>
  <style>
    html, body {
      margin: 0; /*移除整個頁面預設的外邊距。 */
      height: 100%;
      background: white;
    }

    .header {
      height: 50px;
      text-align: center;
      background-color: rgb(252, 153, 6);
      font-size: 30px;
      font-weight: bold;
    }

    .header a {
      color: white;
      text-decoration: none;
      margin: 0 50px;
    }

    .login-title {
      color: white;
      text-align: center;
      margin-top:20px;
      font-size: 32px;
    }

    .login-card {
      background: rgb(96, 130, 243);
      padding: 50px 50px;
      border-radius: 25px;
      box-shadow: 0 20px 30px rgba(53, 51, 51, 0.9);
      text-align: center;
      width: 300px;
      margin: 30px auto;
    }

    .login-card h2 {
      margin-bottom: 20px;
      font-weight: bold;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 20px;
      font-size: 19px;
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
    <a href="add user.php">註冊</a>
  </div>

  <!-- 登入標題 -->
  <div class="login-title">登入系統</div>

  <!-- 登入卡片 -->
  <form action="login.php" method="get">
    <div class="login-card">
      <h2>登入</h2>

      <div class="input-group">
        <input type="text" name="account" placeholder="帳號" autocomplete="off" required />
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="密碼" autocomplete="off" required />
      </div>

      <button class="login-button" type="submit">登入按鈕</button>

      </div>
    </div>
  </form>

</body>
</html>
