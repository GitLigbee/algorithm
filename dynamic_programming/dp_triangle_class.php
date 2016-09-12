<?php

    class dp_triangle{
        public $savePath = array();
        public $ins = 0;
        public $end = 0;
        public $current = 0;
        public $flag = 0;
        function triangle(&$arr){
            
            for($i=count($arr)-2 ; $i>=0; $i--){
                for($m=0; $m<=$i; $m++){
                    $this->current = $arr[$i][$m];
                    $this->ins = $this->current+$arr[$i+1][$m];
                    $this->end = $this->current+$arr[$i+1][$m+1];
                    $arr[$i][$m] = $this->ins<=$this->end?$this->ins:$this->end;
//                    $this->savePath[$i][$m] = $this->ins<=$this->end?0:1;
                }
            }
            // var_dump($savePath);
            /*for($p=0; $p<count($this->savePath);$p++){
                if($this->savePath[$p][$this->flag]){
                    echo ++$this->flag;
                }else{
                    echo $this->flag;
                }
                echo '</br>';
            }*/
            
        }
        
    }

?>