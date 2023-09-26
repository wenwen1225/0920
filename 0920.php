<?php
    session_start();
    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        '0920php'
    );

    /*if(!$link){  //陣列連線確認
        echo "連接錯誤";
        exit();
    }else{
        echo "連結成功";
    }*/


    if(!isset($_SESSION["submit"])){
        //echo "yes";
        $nowtime=date("YmdHGis");  //日期年月日時分秒
        //echo "$nowtime";
        /*$sql1="INSERT INTO 'mymaster' ('id','freq') VALUE($nowtime,$_SESSION['freq'])";
        $sql2="INSERT INTO 'mydetail' ('id','turn','rec') VALUES($nowtime,$_SESSION['freq'],?)*/  //陣列寫入資料庫
        //echo "<br />".$_SESSION['freq'];  //測試前面的次數值
        echo "<br />".$_SESSION['val']; //無法顯示
    }else{
        mysql_error(操作錯誤);
    }

    

    //header("Location: index.php");
?>