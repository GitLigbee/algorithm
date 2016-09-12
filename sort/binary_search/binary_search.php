<?php
//
//    $arr = array();
//    $max = 100000;
//    for($i=0 ; $i<$max; $i++){
//        $arr[$i] = $i;
//    }
//    $target = 7247;
////    echo binary($arr,0,$max-1,$target);
//    $bin = new binary_search();
//$times = microtime(true);
//$bin->binaryRecursive($arr,0,$max-1,$target);
//$timee = microtime(true);
//echo $timee-$times;
    class binary_search{

    //    非递归
        public function binary(&$arr,$low,$top,$target){
            while($low <= $top){
                $mid = floor(($low+$top)/2);
                
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