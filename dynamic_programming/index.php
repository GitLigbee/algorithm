<?php
    require_once 'dp_triangle_class.php';
    require_once 'double_arr.php';
    require_once 'jp.php';

    $jp = new jpg();
    /*$arr = array();
    for($i=0 ; $i<$num ;$i++){
        for($n=0 ; $n<=$i ; $n++){
            $arr[$i][$n] = rand(1,10);
            echo $arr[$i][$n];
        }echo '</br>';
    }*/
    // var_dump($arr);
//    dp($arr);
    

//        $num = pow(4,5);
    $jpg = array();
    for($i=1; $i<=9; $i++){
        $double_arr = new double_arr();
        $triangle = new dp_triangle();
        $arr = $double_arr->double(100*$i);
        $start = microtime(true);
        $triangle->triangle($arr);
        $end = microtime(true);
        $jpg[$i-1] = ($end-$start)*1000;
//        echo $jpg[$i-1]."</br>";
    }
    $jp->single('triangle_dp',$jpg);
//    var_dump($jpg);
?>