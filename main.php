<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "db.php";?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h1>訂餐系統</h1>
    <h3>歡迎<?php echo $_SESSION['name']; ?></h3>
    <button type="sumbit" onclick="location.href='add.php'" >新增</button><br>
    <script>
        function aaa(){
            document.getElementById("aa").style.display="block";
            document.getElementById("bb").style.display="none";
        }
        function bbb(){
            document.getElementById("aa").style.display="none";
            document.getElementById("bb").style.display="block";
        }
    </script>
    <br><button onclick="aaa()">商品管理</button>
    <button onclick="bbb()">會員管理</button>
    
    <div id="aa" align="center">
    <h3>商品管理</h3>
    <td>
                <table border="1" style="width:500px" align="center">
                <form method="get">
                <tr>
                    <td>
                        <input type="text" name="keyword" placeholder="輸入商品名稱搜尋" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword']:''; ?> ">
                    </td>
                    <td>
                        <button type="submit" name="order" value="asc">ID升序</button>
                    </td>
                    <td>
                        <button type="submit" name="order" value="desc">ID降序</button>
                    </td>
                    <td>
                        <button type="submit">搜尋</button>
                    </td>
                    <td></td>
                </tr>
                </form>
                
                    <tr>
                        <td>流水號</td>
                        <td>商品編號</td>
                        <td>商品名稱</td>
                        <td>價格</td>
                        <td>操作</td>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `food` WHERE 1";
                    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                    $keyword = $_GET['keyword'];
                    $sql .= " AND `c_name` LIKE '%$keyword%'";
                    }
                    if (isset($_GET['order']) && ($_GET['order'] == 'asc' || $_GET['order'] == 'desc')) {
                    $order = $_GET['order'];
                    $sql .= " ORDER BY `id` $order";
                    }
                    $res=mysqli_query($link,$sql);
                    
                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["c_num"] . "</td>";
                            echo "<td>" . $row["c_name"] . "</td>";
                            echo "<td>" . $row["c_money"] . "</td>";
                            echo "<td>"."<input type='button' value='修改' onclick=location.href='foodfix.php?id=".$row['id']."'><input type='button' value='刪除' onclick=location.href='del.php?id=".$row['id']."'>"."</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>
            </tr>
    </table>
    </div>
    
    <div id="bb" style="display:none;">
    <h3>會員管理</h3>
    <td>
                <table border="1" style="width:500px" align="center">
                <form method="get">
                <tr>
                    <td>
                        <input type="text" name="keyword" placeholder="輸入會員名稱搜尋" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword']:''; ?> ">
                    </td>
                    <td>
                        <button type="submit" name="order" value="asc">ID升序</button>
                    </td>
                    <td>
                        <button type="submit" name="order" value="desc">ID降序</button>
                    </td>
                    <td>
                    <input type="submit" value="搜尋">
                    </td>
                </tr>
                </form>
                
                    <tr>
                        <td>流水號</td>
                        <td>會員名稱</td>
                        <td>帳號</td>
                        <td>密碼</td>
                        <td>操作</td>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `user` WHERE 1";
                    if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
                    $keyword = $_GET['keyword'];
                    $sql .= " AND `name` LIKE '%$keyword%'";
                    }
                    if (isset($_GET['order']) && ($_GET['order'] == 'asc' || $_GET['order'] == 'desc')) {
                    $order = $_GET['order'];
                    $sql .= " ORDER BY `id` $order";
                    }
                    $res=mysqli_query($link,$sql);
                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["account"]  . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "<td>"."<input type='button' value='修改' onclick=location.href='user.php?id=".$row['id']."'><input type='button' value='刪除' onclick=location.href='del1.php?id=".$row['id']."'>"."</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </td>
            </tr>
    </table>
    
    </div>        
    <button onclick="location.href='logout.php'" align="center">登出</button>
        
</body>
</html>