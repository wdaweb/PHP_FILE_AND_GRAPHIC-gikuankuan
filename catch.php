<?php
include "base.php";
echo "<pre>";
print_r($_FILES);
echo "/<pre>";

// 判斷是否成功上傳
if($_FILES['upload']['name']==0){
   switch($_FILES['upload']['type']){
case "image/jpeg";
$sub='.jpg';
   break;

   case "image/png";
$sub='.ong';
   break;

   case "image/gif";
$sub='.git';
   break;
   }
//    這是比較正規的寫法，但是還有另外一個寫法
//$sub=explode('.',$_FILES['upload']['tmp_name'],"img/".$name);
   
   
   
   
    move_uploaded_file($_FILES['upload']['tmp_name'],"img/".$_FILES['upload']['name']);
   to("upload.php");


}


echo $_FILES['upload']['name'];

?>

<img src="img/<?=$_FILES['upload']['name']?>">