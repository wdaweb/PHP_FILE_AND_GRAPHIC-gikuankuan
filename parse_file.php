<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<div class="form">
    <?php

    include_once "base.php";


    // if (!empty($_FILES['doc']['tmp_name'])) {


    //     move_uploaded_file($_FILES['doc']['tmp_name'], "doc/" . $_FILES['doc']['name']);
    //     echo "檔案搬移的位置在" . "doc/" . $_FILES['doc']['name'];
    // } else {

    //     echo "上傳錯誤:" . $_FILES['doc']['error'];
    // }


    if ($_FILES['doc']['type'] == 'text/plain'){

        move_uploaded_file($_FILES['doc']['tmp_name'], "doc/" . $_FILES['doc']['name']);
        // echo "檔案搬移的位置在" . "doc/" . $_FILES['doc']['name'];

        $path = 'doc/' . $_FILES['doc']['name'];

        $file=fopen($path,"r+");

        while(!feof($file)){
            $txt=fgets($file);
            $font_size=rand(12,20)."px";
            echo "<div style='margin:10px;font-size:$font_size'>".$txt."</div>";

        }
        
       
    } else {

        echo "上傳錯誤:" . $_FILES['doc']['error'];
    }

    


    ?>
</div>
<hr>
<button><a href="./text-import.php">繼續上傳</a></button>