<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 19:34
 */
include_once SYSTEM_PATH . '/Model/PostModel.php';

class PostController {
	private $model;

	function __construct() {
		$this->model = new PostModel();
	}

	function Add() {
		include_once SYSTEM_PATH . '/View/Post/Add.php';
	}

	// function Store() {
	// 	$post = new Post( 0,
	// 		$_POST['category_id'],
	// 		$_POST['title'],
	// 		$_POST['content'],
	// 		0,
	// 		$_POST['slug'],
	// 		1 );
	// 	$rs   = $this->model->Add( $post );
	// 	if ( $rs ) {
	// 		echo 'Thêm thành công';
	// 	} else {
	// 		echo 'Thêm thất bại';
	// 	}
	// }

}