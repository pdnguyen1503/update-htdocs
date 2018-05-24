<?php
if (isset($_POST['submit'])){
  if ($_POST['name'] != '') {
  echo "ten cua ban la: ".$_POST['name'];
  } else {
  echo "nhap ten vao di thang cu:  :D :D";
  }
}
 ?>