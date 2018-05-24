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
		$connect = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME );
		$connect->query("SET NAMES 'utf8'");
		//Truy vấn dữ liệu

		$query = 'SELECT * FROM categories';
		$result = $connect->query($query);
		$data = [];
		while($row = $result->fetch_array()) {
			$cat                = new Category( $row['id'], $row['name'] );
			$data[ $row['id'] ] = $cat;
		}
		return $data;

	}

	function GetById($id){
		$categories = $this->GetCategories();
		return $categories[$id];
	}
	function Add(Category $category){
		//thuc hien add
	}

	function Update(Category $category){
		//Thuc hien update
	}

	function Delete($id){
		//Thuc Hien delete
	}

	function Add2($id, $name, $tag){

	}
}