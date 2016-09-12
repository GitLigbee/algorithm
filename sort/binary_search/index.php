<?php 

	require_once 'binary_search.php';
	require_once 'quicksort.php';

	$arr = array();
    $max = $_GET['max'];
    $target = $_GET['target'];
    for($i = 0 ; $i<$max; $i++){
        $arr[$i] = rand(0,$max);
    }
//    echo count($arr);
    // var_dump($arr);
    // echo "<br>";
    $sort = new quick_sort();
    $sort->quicksort($arr,0,$max-1);
    // foreach($arr as $k=>$v){
    //     echo $v.'<-';
    // }

//    echo binary($arr,0,$max-1,$target);
    $time = array();
    $bin = new binary_search();
    $times = microtime(true);
    $bin->binaryRecursive($arr,0,$max-1,$target);
    $timee = microtime(true);
    $time['rec'] = $timee-$times;
    
    $times = microtime(true);
    $bin->binary($arr,0,$max-1,$target);
    $timee = microtime(true);
    $time['none'] = $timee-$times;
    
    echo json_encode($time);
 ?>