<?php

    class arr{
        public $range;
        public $arr=array();
        
        function arr_val($range){
            $this->range = $range;
            for($i=0; $i<$range; $i++){
                $this->arr[$i] = rand(0-$this->range,$this->range);
            }
//            print_r($this->arr);
            return $this->arr;
        }
    }

?>