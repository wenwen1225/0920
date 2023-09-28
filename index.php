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
    
    if($freq<9){
        $newnum=array();
        while(count($newnum)<3){
            $rnum=random_int(0,9);

            if(!in_array($rnum,$newnum)){
                $newnum[]=$rnum;
            }
        }
        /*for($i=0;$i<3;$i++){
            $newnum[$i]=rand(0,9);  //亂數
        }*/

        $val=implode($newnum);//echo $val;
        $num[]=$newnum; 

        foreach($num as $element){  //顯示陣列
            print_r($element);
            echo "<br/>";
        }

        $a=$newnum[0];  
        $b=$newnum[1];
        $c=$newnum[2];

        $ans1=abs($c-$b);
        $ans2=abs($b-$a);

        if($ans1==$ans2){
            echo "總共試了10次或已經找到數字囉!";
            $_SESSION['submit']=$submit;
            $_SESSION['val']=$val;
            $_SESSION['num']=$num;
            $_SESSION['freq']=$freq;
            $nowtime=date("YmdHGis");
            $_SESSION['nowtime']=$nowtime;

            /*$freq=0;
            $_SESSION['freq']=$freq;  //清除次數
            session_unset($num);
            $_SESSION['num']=$num;*/
            require_once('0920.php');
        }else{
            $freq += 1;
            $_SESSION['val']=$val;
            $_SESSION['num']=$num;
            $_SESSION['freq']=$freq;
            $nowtime=date("YmdHGis");
            $_SESSION['nowtime']=$nowtime;
        }
    }else{
        echo "總共試了10次或已經找到數字囉!";
        $freq=0;
        $_SESSION['freq']=$freq;  //清除次數
        $nowtime=date("YmdHGis");
        $_SESSION['nowtime']=$nowtime;
        $_SESSION['num'] = array();
    }

?>
</form>
</body>
</html>