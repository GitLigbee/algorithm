<?php

    class LCS{
        public $memory = array();
        public $top = array();
        public $low = array();
        public $com = array();
        public $val = array();
        
    
        function lcs_ini($top,$low){
            $this->top = $top;
            $this->low = $low;
            
            for($j=0; $j<=count($this->top); $j++){
                $this->com[0][$j] = 0;
            }
            for($j=0; $j<=count($this->low); $j++){
                $this->com[$j][0] = 0;
            }
        }
        function lcs_tab(){
            
            for($start=1; $start<=count($this->low); $start++){
                for($path=1; $path<=count($this->top); $path++){
                    if($this->top[$path-1]==$this->low[$start-1]){
                        $this->com[$start][$path]=$this->com[$start-1][$path-1]+1;
                        $this->memory[$start-1][$path-1]=0;
                    }
                    elseif($this->com[$start-1][$path]>$this->com[$start][$path-1]){
                        $this->com[$start][$path]=$this->com[$start-1][$path];
                        $this->memory[$start-1][$path-1]=-1;
                    }
                    else{
                        $this->com[$start][$path]=$this->com[$start][$path-1];
                        $this->memory[$start-1][$path-1]=1;
                    }
                }
            }
            
            $this->lcs_val(count($this->top)-1,count($this->low)-1);
            return $this->val;
            
        }
        
        function lcs_val($row,$cel){
            if($row<0||$cel<0){
                return;
            }elseif($this->memory[$cel][$row]==0){
                $this->lcs_val($row-1,$cel-1);
                $this->val[$cel] = $this->low[$cel];
                return;
            }elseif($this->memory[$cel][$row]==-1){
                $this->lcs_val($row,$cel-1);
                return;
            }else{
                $this->lcs_val($row-1,$cel);
                return;
            }
        }
    }

?>