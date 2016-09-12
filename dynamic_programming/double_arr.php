<?php

    class double_arr{
        public $arr = array();
        
        function double($num=0){
            for($i=0 ; $i<$num ;$i++){
                for($n=0 ; $n<=$i ; $n++){
                    $this->arr[$i][$n] = rand(1,$num);
                    
//                    echo $this->arr[$i][$n].'   ';
                }
//                echo '</br>';
            }
//            echo $num."<br/>";
            return $this->arr;
        }
    }

?>