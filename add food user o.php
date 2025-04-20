<?php
            include ("db.php");
            $id=$_GET["id"];
            $sql="SELECT * FROM `food` WHERE `id`=$id";
            
                $res=mysqli_query($link,$sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                        

                    }
                }
                
            ?>