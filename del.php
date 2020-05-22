<?php
include "base.php";

$id=$_GET['id'];
$file=find("file_info",$id);
unlink($file['path']); 
//刪除檔案
del("file_info",$id);
//刪除資料表
to("manage.php");


?>