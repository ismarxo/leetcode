<?php
//Easy level
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum(array $nums, int $target): array
    {
        $result = [];
        $summ   = [];
        $saldo  = 0;
        
        for($i = 0; $i < sizeof($nums); $i++) {
            $saldo = $target - $nums[$i];
            
            if(array_search($saldo, $summ) !== false) {
                $result[] = $i;
                $result[] = array_search($saldo, $summ);
            }
            
            $summ[] = $nums[$i];
        }  
       
        return $result;
    }
}

$app = new Solution;
echo $app->twoSum([2,7,11,15], 9) . PHP_EOL;