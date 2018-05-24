<?php
  class DbModel{
    public function connect(){
      $con = mysqli_connect('localhost', 'root', '', 'tintuc');
     mysqli_set_charset($con, 'utf8');
     //check connettion
      if (mysqli_connect_error()){
       echo 'Could not connect:' . mysqli_connect_error();
      }
      return $con;
    }
  }
 ?>