<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php"?>
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
    <form action="menu user a 2.php" method="post">
        <h1>歡迎<?php echo $_SESSION['name']; ?>👍</h1>
        <button type="button" onclick="location.href='order user a.php'">下訂</button>
        <button type="button" onclick="location.href='add food user a.php'">新增菜單</button>
        
        <?php
            $sql="SELECT * FROM `food` WHERE 1";
            $res=mysqli_query($link,$sql);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    echo "<table style='width:700px' border='2' align='center'>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'品名:'.$row["c_name"]."</td>";
                    echo "<td>".'編號:'.$row["c_num"]."</td>";
                    echo "</tr>";
                    echo "<tr style='height:400px'><td colspan='2'>".'留言:'.$row["text"]."<img src='".$row['img']."' style='width:300px'>"."</td></tr>";
                    echo "<tr style='height:50px'>";
                    echo "<td>".'發佈時間:'.$row["add_time"]."</td>";
                        echo "<td><button type='button' onclick='location.href='add food user a.php?id=".$row['id']."'>修改</button><input type='button' value='刪除' onclick=location.href='del menu.php?id=".$row['id']."'></td>";
                    echo "</tr>";
                    echo "<br>";
                    echo "</table>";
                    
                }
            }
            
        ?>
        <input type="button" value="登出" onclick=location.href="logout.php">
    </form>
</body>
</body>
</html>