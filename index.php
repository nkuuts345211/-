<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1>(*/ω＼*)登入系統</h1>
        <tr>
            <td>
                <table border="1" style="width:500px" align="center">
                <form action="login.php" method="get">
                    <tr>
                        <td>帳號</td>
                        <td><input type="text" name="account"></td>
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" value="登入"></td>
                    </tr>
                </form>
            </td>
            
        
</body>
</html>