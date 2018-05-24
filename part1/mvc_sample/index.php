<?php
define('SYSTEM_PATH', __DIR__);
//lấy giá trị c từ url
$get_controller  = empty( $_GET['c'] ) ? 'Home' : $_GET['c'];
/* neu rong tra ve home.
 co thi giu la trang c
 ham empty kiem tra rong,duoc tao hay chua
 */
//Lấy giá trị a từ url
$get_action      = empty( $_GET['a'] ) ? 'Index' : $_GET['a'];

$controller      = $get_controller . 'Controller'; //CategoryController
// lấy đuôi là c, tức là category. nối đuôi controller
$path_controller = 'Controller/' . $controller . '.php';
if ( ! file_exists( $path_controller ) ) { // kiem tra khac true. kiem tra file trong controller co ton tai k
	die ( 'Controller không tồn tại' );
}
require_once $path_controller;
// goi den controller
if ( ! class_exists( $controller ) ) { //neu trong file controller k co class nao
	die ( 'Controller không tồn tại' );
}
$controllerObject = new $controller();
if ( ! method_exists( $controllerObject, $get_action ) ) { // neu false. khong ton tai phuong thuc
	die ( 'Action không tồn tại' );
}
// Gọi tới action
$controllerObject->{$get_action}();

