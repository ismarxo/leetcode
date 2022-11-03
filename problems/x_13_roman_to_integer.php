<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanArray = [];
        $array = [];
        $abc = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $len = strlen($s);
        $preNums = [
          'I', 'X', 'C'  
        ];
        $preNumsArray = [
            'I' => ['V', 'X'],
            'X' => ['L', 'C'],
            'C' => ['D', 'M']
        ];
        if($len == 1) return $abc[$s];
      
        for($i = 0; $i < $len; $i++) {
            $array[] = $s[$i];
            
            if($i + 1 < $len) {
                if($s[$i]) {
                  
                }
            }
          
            if($i != 0) {
                if(in_array($s[$i], $preNums)) {
                    if($preNums[$s[$i]]) {
                    
                    }
                }                   
            } else {
                $romanNum = $s[0];
            }      
        }        
    }
}

$app = new Solution;
$num = 'I';
echo $app->romanToInt($num) . PHP_EOL;