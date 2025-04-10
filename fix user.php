<?php
include ("db.php");
$id=$row['id'];
$sql="SELECT * FROM `user` WHERE $id";
$res=mysqli_query($link,$sql);
echo "<table>";
echo   "<tr>";
    echo"<td>帳號</td>";
    echo"<td><input type='text' name='account' value=".$_SESSION["account"]."></td>";
    echo"</tr>";
    echo    "<tr>";
echo    "<td>密碼</td>";
  echo  "<td><input type='text' name='password' value=".$_SESSION["password"]."></td>";
  echo  "</tr>";
echo    "<tr>";
echo    "<td>名稱</td>";
    echo"<td><input type='text' name='name' value=".$_SESSION["name"]."></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>類別</td>";
    echo"<td><input type='text' name='type' value=".$_SESSION["type"]."></td>";
    echo"</tr>";
echo"</table>";

?>