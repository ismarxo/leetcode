<?php
//Easy level
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
      if($x < 0) return false;
      if($x < 10) return true;
      
      $string = (string) $x;
      $array = [];
      for($i = 0; $i < strlen($string); $i++) {
         $array[] = $string[$i];
      }

      $reverse_array = array_reverse($array);

      if($array === $reverse_array) {
        return true;
      }

      return 0;
    }
}

$app = new Solution;
echo $app->isPalindrome(123321) . PHP_EOL;