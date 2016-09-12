<?php


//    $pos = partition($arr,0,$max-1);
//    var_dump($arr);
//echo "<br>";
//echo $pos.'+'.$arr[$pos];
    class quick_sort{

        function quicksort(&$arr,$low,$top){
            if($low < $top){
               $pivotpos = $this->partition($arr,$low,$top);
               $this->quicksort($arr,$low,$pivotpos-1);
               $this->quicksort($arr,$pivotpos+1,$top); 
            }
            
        }
        function partition(&$arr, $low ,$top){
            if($low == $top){
                return;
            }
    //      设置初始数值
            $com = $arr[$low];
            while($low!=$top){
    //            将比初始数值小的替换到左边
                while($top&&$top!=$low){
                    if($com > $arr[$top]){
                    $arr[$low++] = $arr[$top];
                    break;
                    }else{
                        $top--;
                    }
                }
    //            将比初始数值大的替换到右边
                while($low&&$low!=$top){
                    if($com < $arr[$low]){
                        $arr[$top--] = $arr[$low];
                        break;
                    }else{
                        $low++;
                    }
                }
            }
            $arr[$low] = $com;
            return $low;
            
        }
    }
?>