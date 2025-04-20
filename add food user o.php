<?php
            include ("db.php");
            $id=$_GET["id"];
            $sql="SELECT * FROM `food` WHERE `id`=$id";
            
                $res=mysqli_query($link,$sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<form action='add%20food%20user.php' method='post'>";
                        echo "<table align='center' border='1px solid black'>";
                        echo "<tr>";
                        echo "<td>";
                        echo "品名 : ";
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='text' name='c_name' value='".$row["c_name"]."'>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>";
                        echo "價格 : ";
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='text' name='c_money' value='".$row["c_money"]."'>";
                        echo "</td>";
                        echo "</tr>";
                        
                        echo "<tr>";
                        echo "<td>";
                        echo "介紹 : ";
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='text' name='text' value='".$row["text"]."'>";
                        echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td colspan='2'>";
                        echo "<input type='submit'  value='送出'>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "<input type='hidden' name='id' value='".$row["id"]."'>";

                    }
                }
                
            ?>