<?php
function findOutlier($nums) {
  $lastOddOrEven = array(null, null);
  for ( $i = 0; $i < sizeof($nums); $i++) {
     $parity = $nums[$i] % 2;
    if ($lastOddOrEven[0] !== null && $lastOddOrEven[1] !== null) {

      return $lastOddOrEven[1 - $parity];
    }
    $lastOddOrEven[$parity] = $nums[$i];
  }
  return $nums[sizeof($nums) - 1];
}

echo findOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
?>