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

    $freq=isset($_SESSION['freq']) ? $_SESSION['freq'] : 0;
    $num=isset($_SESSION['num']) ? $_SESSION['num'] : array();
    
    if($freq<10){
        $newnum=array();
        $newnum[0]=rand(0,9);  //亂數1.2.3
        $newnum[1]=rand(0,9);
        $newnum[2]=rand(0,9);
        
        $num[]=$newnum;

        foreach($num as $element){  //顯示陣列
            print_r($element);
            echo "<br/>";
        }

        /*for($i=0;$i<count($num);$i++){
            $val=$num[$i];
            echo $val;
        }*/
        $a=$newnum[0];
        $b=$newnum[1];
        $c=$newnum[2];
        echo $a;
        echo $b;
        echo $c;
        $ans1=abs($c-$b);
        $ans2=abs($b-$a);
        echo $ans1;
        echo $ans2;

        $nowtime=date("YmdHGis"); //現在時間

        if($ans1==$ans2){
            //$sql1="INSERT INTO 'mymaster' ('id','freq') VALUES ($_SESSION($nowtime),$freq)";
            echo "ok";
        }else{
            echo "no";
        }

        /*$a=$num[0];
        $b=$num[1];
        $c=$num[2];
        $val=implode($num); //可以串接陣列值 無法顯示
    
        /*$num[]=$newnum;
        /*print_r ($num);
        echo "<br>";
        //echo "<pre>";
        print_r($num);
        //echo "</pre>";
        echo "<br>"; */

        $freq++;
        //$_SESSION['val']=$val;
        $_SESSION['num']=$num;
        $_SESSION['freq']=$freq;

    }else{
        echo "總共試了10次或已經找到數字囉!";
        $freq=0;
        $_SESSION['freq']=$freq;  //清除次數
        unset($num);
        $_SESSION['num']=$num;

        /*$_SESSION_unset;
        require_once "0920.php";*/
    }

?>
</form>
</body>
</html>