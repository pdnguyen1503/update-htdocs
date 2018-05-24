<?php

/**
 * Created by PhpStorm.
 * User: LongNguyen
 * Date: 11/04/2018
 * Time: 19:30
 */
include_once "Post.php";
include_once SYSTEM_PATH . '/Common/DbDriver.php';

class PostModel {
	private $db;

	function __construct() {
		$this->db = new DbDriver();
	}

	function Add(Post $post ) {
		return $this->db->insert( 'posts', (array) $post );
	}
	function Update(Post $post){
		return $this->db->update('post', (array) $post, 'id='.$post->id);
	}
}