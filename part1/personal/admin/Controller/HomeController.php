<?php

    require_once SYSTEM_PATH . '/Model/PostModel.php';

    class HomeController{
        private $postModel;

        function __construct(){
            $this->postModel= new PostModel();
        }

        function Index(){

            $list = $this->postModel->GetAll();
            include(SYSTEM_PATH.'/View/Home/index.php');
        }

        function a(){
            echo "eee";
        }
    }

 ?>