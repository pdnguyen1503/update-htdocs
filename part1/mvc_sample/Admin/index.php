<?php
define('SYSTEM_PATH', __DIR__);
//lấy giá trị c từ url
$get_controller  = empty( $_GET['c'] ) ? 'Home' : $_GET['c'];
//Lấy giá trị a từ url
$get_action      = empty( $_GET['a'] ) ? 'Index' : $_GET['a'];
$controller      = $get_controller . 'Controller'; //CategoryController
$path_controller = 'Controller/' . $controller . '.php';
if ( ! file_exists( $path_controller ) ) {
	die ( 'Controller không tồn tại' );
}
require_once $path_controller;
if ( ! class_exists( $controller ) ) {
	die ( 'Controller không tồn tại' );
}
$controllerObject = new $controller();
if ( ! method_exists( $controllerObject, $get_action ) ) {
	die ( 'Action không tồn tại' );
}
// Gọi tới action
$controllerObject->{$get_action}();

