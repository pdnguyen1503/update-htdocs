<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 07:29
 */

include_once SYSTEM_PATH.'/Model/CategoryModel.php';
class CategoryController {

	private $categoryModel;

	function __construct() {
		$this->categoryModel = new CategoryModel();
	}
	function Index(){
		echo 'Hello Category';
	}

	function Index2(){
		echo 'Hello index2';
	}
	public function GetAll() {

		$result = $this->categoryModel->GetCategories();

		include_once SYSTEM_PATH.'/View/Category/GetAll.php';
	}
	public function GetById(){
		$id = $_GET['id'];
		$data = $this->categoryModel->GetById($id);
		include_once SYSTEM_PATH.'/View/Category/GetById.php';
	}

	// public function Luu(){
	// 	$newCate = new Category('id','name', 'tag', 'des','');
	// 	$this->categoryModel->Add($newCate);
	// }

	// public function Add(){
	// 	$connect = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
	// 	$connect->query("SET NAMES 'utf8'");
	// 	$query = 'INSERT INTO categories'.
	// 	         '(id, name, tag, description, icon, slug, active, created_at, updated_at)'.
	// 	         "VALUES ('5', 'Phụ Nữ', NULL, NULL, NULL, NULL, '1', NULL, NULL)";
	// 	$result = $connect->query($query);
	// 	if($result){
	// 		echo  'Thêm thành công';
	// 	}else{
	// 		echo  'Thêm thất bại';
	// 	}
	// }
}