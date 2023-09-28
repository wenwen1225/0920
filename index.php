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
    //$newnum=isset($_SESSION['newnum']) ? $_SESSION['newnum'] : array();
    
    if($freq<10){
        $newnum=array();
        $newnum[0]=rand(0,9);  //亂數1.2.3
        $newnum[1]=rand(0,9);
        $newnum[2]=rand(0,9);

        $val=implode($newnum);
        echo $val;
        $num[]=$newnum; 

        foreach($num as $element){  //顯示陣列
            print_r($element);
            echo "<br/>";
        }

        $a=$newnum[0];  
        $b=$newnum[1];
        $c=$newnum[2];
        
        /*if($a!=$b && $b!=$c && $a!=$c){  //比對數值是否依樣 未完成
            break;
        }else{

        }*/

        $ans1=abs($c-$b);
        $ans2=abs($b-$a);

        if($ans1==$ans2){
            $_SESSION['submit']=$subnit;
            $_SESSION['val']=$val;
            $_SESSION['num']=$num;
            $_SESSION['freq']=$freq;

            header('location: 0920.php');
            $freq=0;
            $_SESSION['freq']=$freq;  //清除次數
            unset($num);
            $_SESSION['num']=$num;
            echo "總共試了10次或已經找到數字囉!";
            exit;
        }else{
            $freq++;
            $_SESSION['val']=$val;
            $_SESSION['num']=$num;
            $_SESSION['freq']=$freq;
        }
    }else{
        echo "總共試了10次或已經找到數字囉!";
        $freq=0;
        $_SESSION['freq']=$freq;  //清除次數
        unset($num);
        $_SESSION['num']=$num;
    }

?>
</form>
</body>
</html>