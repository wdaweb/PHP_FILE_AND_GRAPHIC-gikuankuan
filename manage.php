<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<?php

/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
include "base.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案管理功能</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="header">檔案管理練習</h1>
    <!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
    <form action="save.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upload" id="img"><br>
        <input type="text" name="note"><br>
        <input type="submit" value="上傳">

    </form>
    <table class="table">
        <tr>
            <td>預覽</td>
            <td>檔名</td>
            <td>型態</td>
            <td>註記</td>
            <td>上傳時間</td>
            <td>操作</td>
        </tr>


        <?php
        $all = all('file_info');
        foreach ($all as $row) {
        ?>
            <tr>
                <td><img src='<?= $row['path']; ?>' style="width:150px"></td>
                <td><?= $row['name']; ?> </td>
                <td><?= $row['type']; ?> </td>
                <td><?= $row['note']; ?> </td>
                <td><?= $row['upload_time']; ?> </td>
                <td> <a class="btn" href="confirm.php?id=<?= $row['id']; ?>">刪除</a>
                    <a class="btn" href="update.php?id=<?= $row['id']; ?>">更新</a> </td>
            </tr>

        <?php
        }
        ?>
    </table>



    <!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->




</body>

</html>