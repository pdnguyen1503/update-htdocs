
<?php
  // lay bien tren link trinh duyet
  $action = $_GET['action'];
  // $controller = $_GET['controller'];
  // $controllerName = $controller . 'Controller';

  // require('controllers/' . $controllerName .'.php');
  require_once('controllers/PostController.php');
  $postController = new PostController();
  // $controller->$action();
  if ($action == 'list') {
  $postController->getPost();
  }
  // nguoi duong doi den add
  if ($action == 'add') {
    $postController->addPost();
  }
  if ($action =='doAdd') {
    $postController->doAdd();
  }
  if ($action == 'edit') {
    $postController->editPost();
  }
 ?>