<?php
  function Sum($a,$b){
    $c = $a +$b;
    // echo "<p>$c</p>";
    return $c;
  }
  echo Sum(4,5)."<p></p>";
  echo Sum(34,56);
  /*bai toan 2:
  người dùng không biết cộng bao nhiêu tham số, su dụng hàm: func_get_arg(first_paramter)
  */
 function Cong(){
  for ($i=0; $i < func_get_arg(); $i++) {
  $sum = $sum + func_get_arg(i);
  }
 }
 // $func = $_GET['goiham'];
 // func();
 // tham tri
 $a = 5;
 function haha($b, &a){
  $a = $b + $a;
 }
 echo haha(2, 5);
?>
