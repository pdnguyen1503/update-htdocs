<?php
include_once "Post.php";
include_once SYSTEM_PATH . '/Common/DbDriver.php';

class PostModel {
	private $db;

	function __construct() {
		$this->db = new DbDriver();
	}

	function GetAll(){
		$query = 'SELECT * FROM posts ORDER BY id DESC';
		return $this->db->get_list($query);
	}

	function GetByCategory($id){
		$query = 'SELECT * FROM posts WHERE category_id='.$id;
		return $this->db->get_list($query);
	}

	function GetById($id){
		$query = 'SELECT * FROM posts WHERE id='.$id;
		return $this->db->get_row($query);
	}

	function Add(Post $post ) {
		return $this->db->insert( 'posts', (array) $post );
	}
	function Update(Post $post){
		return $this->db->update('post', (array) $post, 'id='.$post->id);
	}
}