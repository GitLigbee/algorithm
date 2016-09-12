<?php

    class exhaustion{
        
        public $sum = 0;
        public $max = 0;
        
        function exhaust($arr){
            for($i=0; $i<count($arr); $i++){
                $this->sum = 0;
                for($j=$i; $j<count($arr); $j++ ){
                    $this->sum+= $arr[$j];
                    if($this->max < $this->sum){
                        $this->max = $this->sum;
                    }
                }
            }
            return $this->max;
        }
    }

?>
