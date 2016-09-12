<?php


    class binary_search{
    //    非递归
        public function binary(&$arr,$low,$top,$target){
            while($low <= $top){
                $mid = floor(($low+$top)/2);
                echo $mid."<br>";
                if($arr[$mid]==$target){
                    return $arr[$mid];
                }elseif($arr[$mid]<$target){
                    $low = $mid+1;                
                }else{
                    $top = $mid-1;
                }
            }
            return -1;
        }
    //    递归
        public function binaryRecursive(&$arr,$low,$top,$target){
            if($low<=$top){
                $mid = floor(($low+$top)/2);
                if($mid==$target){
                    return $arr[$mid];
                }elseif($arr[$mid]<$target){
                    return $this->binaryRecursive($arr,$mid+1,$top,$target);
                }else{
                    return $this->binaryRecursive($arr,$low,$top-1,$target);
                }
            }else{
                return -1;
            }
        }
    }
?>