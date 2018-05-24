<?php

    include_once SYSTEM_PATH . '/Model/PostModel.php';

class PostController {
    private $model;

    function __construct() {
        $this->model = new PostModel();
    }

    function SelectAll() {
        $list = $this->model->GetAll();
        include_once SYSTEM_PATH . '/View/Home/table.php';
    }
    function Add(){
        die('hhh');
        require_once SYSTEM_PATH . '/View/Post/Add.php';
    }

    function Edit() {
        $list = $this->model->GetAll();
        include_once SYSTEM_PATH . '/View/Home/edit.php';
    }
}

 ?>
