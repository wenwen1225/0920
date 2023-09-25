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
    
    if($time<10){
        $newnum=array();
        $newnum[0]=rand(0,10);
        $newnum[1]=rand(0,10);
        $newnum[2]=rand(0,10);
        
        $num[]=$newnum;

        foreach($num as $element){
            print_r($element);
            echo "<br/>";
        }

        /*$a=$num[0];
        $b=$num[1];
        $c=$num[2];

    
        /*$num[]=$newnum;
        /*print_r ($num);
        echo "<br>";
        //echo "<pre>";
        print_r($num);
        //echo "</pre>";
        echo "<br>"; */

        $time++;

        $_SESSION['num']=$num;
        $_SESSION['time']=$time;

    }else{
        echo "總共試了10次或已經找到數字囉!";
        $time=0;
        $_SESSION['time']=$time;  //清除次數
        unset($num);
        $_SESSION['num']=$num;
    }

?>
</form>
</body>
</html>