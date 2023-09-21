<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>0920猜數字</title>
</head>

<body>

<form action="0920.php" method="post" name="form1" id="form1">

<p>
  <input type="submit" name="submit" id="submit" value="送出">
</p>

<?php
    session_start();

    $time=isset($_SESSION['time']) ? $_SESSION['time'] : 0;
    $num=isset($_SESSION['num']) ? $_SESSION['num'] : array();
    
    if($time>0){
        $newnum=array();
        $newnum[0]=rand(0,10);
        $newnum[1]=rand(0,10);
        $newnum[2]=rand(0,10);
        
        /*foreach($newnum as $element){
            echo "$element ,";
        }*/
        $num[]=$newnum;
        print_r ($newnum);

        $time++;

        $_SESSION['num']=$num;
        $_SESSION['time']=$time;
    }

    /*$link=@mysqli_connect(
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
    }*/

?>
</form>
</body>
</html>