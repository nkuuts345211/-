<?php
include ("db.php");
$id=$_POST["id"];
$c_num=$_POST["c_num"];
$c_name=$_POST["c_name"];
$c_money=$_POST["c_money"];
$text=$_POST["text"];
$account=$_SESSION["account"];
$img=$_FILES["img"]["name"];

$sql="DELETE FROM `food` WHERE `id`=$id";
mysqli_query($link,$sql);
$targetDir = "img/"; // 要儲存圖片的資料夾

// 確保資料夾存在，若不存在則建立
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}
$targetFile = $targetDir . basename($_FILES["img"]["name"]);

$imageFileType = strtolower(pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION));


// 檢查是否為圖片
$check = getimagesize($_FILES["img"]["tmp_name"]);
if ($check === false) {
    echo "檔案不是圖片。";
    exit;
}

// 限制檔案大小 (例如最大 2MB)
if ($_FILES["img"]["size"] > 2000000) {
    echo "檔案太大。";
    exit;
}

// 限制檔案格式
$allowedTypes = ["jpg", "jpeg", "png", "gif"];
if (!in_array($imageFileType, $allowedTypes)) {
    echo "只允許 JPG, JPEG, PNG, GIF 格式。";
    exit;
}

// 將檔案移到指定資料夾
if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
   
$sql="INSERT INTO `food`(`id`, `c_num`, `c_name`, `c_money`, `img`, `add_time`,`text`) VALUES ('$id','$c_num','$c_name','$c_money','$img',NOW(),'$text')";
    mysqli_query($link,$sql);
      $name="SELECT * FROM `user` WHERE `account`='$account'";
        $add=mysqli_query($link,$name);
        while($row=mysqli_fetch_assoc($add)){
            $_SESSION["account"]=$row["account"];
            $_SESSION["name"]=$row["name"];
            if($row['type']=='o'){
                header("location:menu%20user%20o.php");
            }else{
                header("location:menu%20user%20a.php");
            }
        }



}
else{
    echo "error";
}

  
?>