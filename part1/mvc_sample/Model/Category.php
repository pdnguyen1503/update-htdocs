<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 07:30
 */
// goi truong cua database
class Category {
	public $id;
	public $name;
	public $tag;
	public $description;
	public $icon;
	function __construct($id, $name, $tag = '', $description = '', $icon = '') {
		$this->id = $id;
		$this->name = $name;
		$this->tag = $tag;
		$this->description = $description;
		$this->icon = $icon;
		$this->connect = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME ) or die ( 'Lỗi kết nối' );
	}

}