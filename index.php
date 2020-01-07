<?php 
class Solution {
  function isPalindrome($x) {
    $inputArr = str_split($x);
    $outputArr = array();
    for ($i = count($inputArr) - 1; $i >= 0; $i--) {
      $outputArr[] = $inputArr[$i];
    }
    
    if ($inputArr == $outputArr) {
      return true;
    } else {
      return false;
    }
  }
}

echo "<pre>";
print_r(Solution::isPalindrome(121));
