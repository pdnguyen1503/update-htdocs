<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 07:44
 */
require_once SYSTEM_PATH . '/Model/PostModel.php';
require_once SYSTEM_PATH . '/Model/CategoryModel.php';

class HomeController {

	private $postModel;
	private $categoryModel;
	function __construct(){
		$this->postModel = new PostModel();
		$this->categoryModel = new CategoryModel();
	}

	function Index() {
		$list = $this->postModel->GetAll();
		$categories = $this->categoryModel->GetCategories();
		include SYSTEM_PATH.'/View/Home/index.php';
	}

	function Detail(){
		$id = isset($_GET['id'])?$_GET['id']: 1;
		$post = $this->postModel->GetById($id);
		include SYSTEM_PATH.'/View/Home/detail.php';
		$categories = $this->categoryModel->GetCategories();
	}

	function ViewByCategory(){
		$id = $_GET['id'];
$list = $this->postModel->GetByCategory($id);
$categories = $this->categoryModel->GetCategories();
		include SYSTEM_PATH.'/View/Home/index.php';

				}
}