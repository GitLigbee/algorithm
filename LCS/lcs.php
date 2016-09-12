<?php

    $val = 10;
    $top = array();
    $low = array();
    $com = array();

    for($i=0; $i<$val; $i++){
        $top[$i] = chr(rand(65,70));
        $low[$i] = chr(rand(65,70));
    }
//    print_r($arr);
    for($j=0; $j<=$val; $j++){
        $com[0][$j] = 0;
        $com[$j][0] = 0;
    }
//    var_dump($com);
    for($start=1; $start<=$val; $start++){
        for($path=1; $path<=$val; $path++){
            if($top[$path-1]==$low[$start-1]){$com[$start][$path]=$com[$start-1][$path-1]+1;}
            elseif($com[$start-1][$path]>$com[$start][$path-1]){$com[$start][$path]=$com[$start-1][$path];}
            else{$com[$start][$path]=$com[$start][$path-1];}
        }
    }
    
    foreach($com as $row){
        foreach($row as $cel){
            echo $cel;
        }
        echo '<br/>';
    }

?>