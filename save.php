<?php
include "base.php";

if ($_FILES['upload']['name'] == 0) {
    switch ($_FILES['upload']['type']) {
        case "image/jpeg";
            $sub = '.jpg';
            break;

        case "image/png";
            $sub = '.ong';
            break;

        case "image/gif";
            $sub = '.git';
            break;
    }
    //    這是比較正規的寫法，但是還有另外一個寫法
    //$sub=explode('.',$_FILES['upload']['tmp_name'],"img/".$name);


    $name = 'kuan' . date("Ymdhis") . $sub;

    move_uploaded_file($_FILES['upload']['tmp_name'], "img/" . $name);
}

$data = [
    'name' => $name,
    'type' => $_FILES['upload']['type'],
    'note' => $_POST['note'],
    'path' => 'img/' . $name,
];

echo $_FILES['upload']['name'];
save('file_info', $data);
header("location:manage.php");

?>

