<?php
  // $a =5;
  // $b= 6;
  function them($p1, $p2){
    if ($p1 <=1000 && $p1>=-100 && $p2 <=1000 && $p2 >=-100) {
      # code...
      $p = $p1 + $p2;
    }
    else{
      echo "khong hoat dong";
    }
    echo " size cua chim tai ne: $p1 + $p2 = $p";
    return $p;
  }
  them(3, 7);
?>