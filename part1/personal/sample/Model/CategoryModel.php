<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 07:33
 */
include_once "Category.php";
include_once SYSTEM_PATH.'/Common/config.php';

class CategoryModel extends DbDriver {
	function GetCategories() {
$query = 'SELECT * FROM categories';
return $this->get_list($query);

	}

	function GetById($id){
		$categories = $this->GetCategories();
		return $categories[$id];
	}
	// function Add(Category $category){
	// 	//thuc hien add
	// }

	// function Update(Category $category){
	// 	//Thuc hien update
	// }

	// function Delete($id){
	// 	//Thuc Hien delete
	// }

	// function Add2($id, $name, $tag){

	// }
}