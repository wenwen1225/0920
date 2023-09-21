<?php
    session_start();
    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        '0920php'
    );

    if(!$link){
        echo "連接錯誤";
        exit();
    }else{
        echo "連結成功";
    }

    header("Location: index.php");
?>