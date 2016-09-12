<?php

    class divide{
        public $left_sum;
        public $right_sum;
        public $sum;
        public $arr;
        
      
        function div($arr){
            $this->arr = $arr;
//            echo count($this->arr);
            return $this->arr_val(0,count($this->arr)-1);
        }
        
        function arr_val($left,$right){
            if($left==$right){
                return $this->arr[$left]>0?$this->arr[$left]:0;
            }else{
                $center = floor(($left+$right)/2);
                
                $this->left_sum = $this->arr_val($left,$center);
                $this->right_sum = $this->arr_val($center+1,$right);

                $temp = 0;
                $l = 0;
                for($i=$center; $i>=$left; $i--){
                    $temp+= $this->arr[$i];
                    if($temp> $l){
                        $l = $temp;
                    }
                }
                $temp = 0;
                $r = 0;
                for($i=$center+1; $i<=$right; $i++){
                    $temp+= $this->arr[$i];
                    if($temp> $r){
                        $r = $temp;
                    }
                }

                $this->sum = $r+$l;
                
//                echo $this->left_sum.$this->right_sum.$this->sum;
                if($this->sum < $this->left_sum){$this->sum = $this->left_sum;}
                if($this->sum < $this->right_sum){$this->sum = $this->right_sum;}
                
//                echo $this->sum."->";
                return $this->sum;
            }
            
            
        }
    }

?>