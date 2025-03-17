<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#a1{
    background-color: gray;
}

    </style>
</head>
<body align="center">
    <!-- <script>
        alert('歡迎');
    </script> -->
    <div id="a1">
<table align="center" >
    <tr>
        
        <td><a href="http://localhost/%e9%a6%96%e9%a0%81/index%20login.php"><img src="https://th.bing.com/th/id/OIP.tyEHuivrhydAWDxiTRzrfAAAAA?w=137&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" height="50px" width="50px"></a></td>
        <td ><a href="http://localhost/%e8%a8%82%e5%96%ae/menu.php">菜單簡介</a></td>
        
        
        
        <td ><a href="http://localhost/%e7%ae%a1%e7%90%86%e5%93%a1/add%20user.php">註冊</a></td>
    </tr>
</table>
    </div>
    <h1 align="center">登入系統</h1>
    <form action="login.php" method="get">
        <table align="center" border="1">
<tr>
    <td>帳號</td>
    <td><input type="text" name="account" ></td>
</tr>
<tr>
    <td>密碼</td>
    <td><input type="text" name="password" ></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="送出"></td>
</tr>
        </table>
    </form>
</body>
</html>