<?php 
    require_once 'enm.php';
    require_once 'arr.php';
    require_once 'divide.php';
    require_once 'dy.php';
    require_once 'jp.php';

    $exhaust = new exhaustion();
    $divide = new divide();
    $dy = new dynamic();
    $jpg = new jpg();
/*
    $arr = new arr();
    $data = $arr->arr_val(10000);
//    $data = array(2,-2,0,-4);
//    print_r($data);
    echo $exhaust->exhaust($data);
    echo "</br>";
    echo $divide->div($data);
    echo $dy->dy($data);
*/
    $erwei = array();
    $name = array(0=>"diy",1=>"divide",2=>"exhaust");
    for($i=0; $i<6; $i++){
        $arr = new arr();
        $data = $arr->arr_val(1000*$i+1);
        
        $start = microtime(true);
        $exhaust->exhaust($data);
        $end = microtime(true);
        $erwei['exhaust'][$i] = $end-$start;
        
        $start = microtime(true);
        $divide->div($data);
        $end = microtime(true);
        $erwei['divide'][$i] = $end-$start;
        
        $start = microtime(true);
        $dy->dy($data);
        $end = microtime(true);
        $erwei['diy'][$i] = $end-$start;
    }
//       var_dump($erwei); 
//        print_r($erwei);
//        print_r($name);
        $jpg->single($name,$erwei);
 ?>