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
        /*$sql="INSERT INTO mydetail (id,turn,rec)";
        $sql.=VALUES($nowtime,$_SESSION['time'],?)*/  //陣列寫入資料庫
        //echo "<br />".$_SESSION['time'];  //測試前面的次數值
        echo "<br />".$_SESSION['val']; //無法顯示
    }else{
        echo "no";
    }

    

    //header("Location: index.php");
?>