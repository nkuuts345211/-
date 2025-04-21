<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: purple;
            margin-inline: auto;
            width: 15%;
        }
        div a{
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
    <div>
        <h2><a href="menu%20user%20a.php">返回上一頁</a></h2>
    </div>
<?php
            include ("db.php");
            $id=$_GET["id"];
            $sql="SELECT * FROM `food` WHERE `id`=$id";
            
                $res=mysqli_query($link,$sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<form action='adduser2.php' method='post' align='center'>";
                        echo "<table align='center' border='1px soild black'>";
                        echo "<tr><td>num</td><td><input type='text' name='c_num' value='".$row["c_num"]."'></td></tr>";
                        echo "<tr><td>name</td><td><input type='text' name='c_name' value='".$row["c_name"]."'></td></tr>";
                        echo "<tr><td>money</td><td><input type='text' name='c_money' value='".$row["c_money"]."'></td></tr>";
                        echo "<tr><td>img</td><td><input type='file' name='img' accept='image/*' required></td></tr>";
                        echo "<tr><td>text</td><td><input type='text' name='text' style='height:200px' value='".$row["text"]."'></td></tr>";
                        echo "</table>";
                        echo "</form>";

                    }
                }
                
            ?>
    
</body>
</html>