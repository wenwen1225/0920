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
        $fre=$_SESSION['freq']+1;  //次數
        //echo "<br>"."$fre";
        $value=$_SESSION['val'];
        //echo "<br>"."$value";
        $sql1="INSERT INTO `mymaster` (`id`,`freq`) VALUES('$nowtime','$fre')";
        //echo $sql1;
        mysqli_query($link, $sql1);

        $sql2="INSERT INTO `mydetail` (`id`,`turn`,`rec`) VALUES('$nowtime','$fre','$value')";
        //echo "<br>".$sql2;
        mysqli_query($link, $sql2);
    }else{
        mysqli_error(操作錯誤);
    }

    mysqli_close($link);
    header("Location: index.php");
?>