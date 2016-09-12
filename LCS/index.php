<?php
    
    require_once 'lcs_dp.php';
    require_once 'jp.php';

    $jpg = new jpg();

    $lcs = new LCS();
    $top = array();
    $low = array();
    $time = array();
    $name = array(0=>'LCS');
    $enter = array(10,100,200,300,400,500,600,700,800,900);
    
    for($i=0; $i<count($enter); $i++){
//        echo $enter[$i].'   ';
        $top = arr_ini($enter[$i]);
        $low = arr_ini($enter[$i]); 
        $lcs->lcs_ini($top,$low);
        $start = microtime(true);
        $res = $lcs->lcs_tab();
        $end = microtime(true);
        $time[$name[0]][$i] = ($end-$start)*100;
//        echo $time[$name[0]][$i].'</br>';
    }
//    var_dump($time); 
//    $jpg->single($name,$time);
    
//    var_dump($res);

    function arr_ini($val){
      for($i=0; $i<$val; $i++){
        $top[$i] = chr(rand(65,90));
        }
      return $top;    
    }
?>