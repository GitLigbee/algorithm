<?php

    class dynamic{
        public $max;
        public $temp;
        function dynamic(){
            $this->max = 0;
            $this->temp = 0;
        }
        function dy($arr){
            for($i=0; $i<count($arr); $i++){
                
                if($this->temp<0){
                    $this->temp = $arr[$i];
                }else{
                    $this->temp+=$arr[$i];
                }
                if($this->temp>$this->max){
                    $this->max = $this->temp;
                }
                
            }
            return $this->max;
        }
    }

?>