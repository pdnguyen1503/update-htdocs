<?php
  class person {
    public $name;
    function __contructor($name){
      $this->name = $name;
    }
    function Getname(){
      return $this->name;
    }
    class Employee extends Person{
      private $age;
      function __contructor($name, $age){
        $this->age= $age;
      }
    }
  }
 ?>