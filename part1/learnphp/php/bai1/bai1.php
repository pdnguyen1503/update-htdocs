<?php
  $a = 1; $b = 3;
  function Sum(){
    global $a, $b; // khai báo để biến có tác dụng như biến toàn cục
    // cach khai báo thứ 2: $GLOBALS['$b'] = $GLOBALS['$a'] + $GLOBALS['$b'];
    $b = $a + $b;
  }
  Sum();
  echo $b;
/*
bai 2: phương thức $request
lấy các giá trị cảu get, post, cookie.
các phần tử trong mảng request độc lập với các mảng get, post
=> có thể thay đổi giá trị khác với mảng request, còn giá trị get, post thì
không thay đổi được,
*/
// khai báo hằng
// define('ten_hang', 'giatri')
echo "<p></p>";
define('SDT', '09668362480');
echo SDT;
echo "<p> su dung cau lênh vong lặp</p>";
$switch1 = 5;
switch ($switch1) {
  case '1':
    echo "gia tri switch1 =1";
    break;
  case '2':
    echo "gia tri switch1 =2";
    break;
  case '3':
    echo "gia tri switch1 =3";
    break;
  case '4':
    echo "gia tri switch1 =4";
    break;
  default:
    echo "khac gia tri 1234";
    break;
}
 ?>