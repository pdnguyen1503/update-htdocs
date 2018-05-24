<?php
class Post{
	public $id;
	public $category_id;
	public $title;
	public $intro;
	public $image;
	public $content;
	public $tag;
	public $description;
	public $count_comments;
	public $slug;
	public $active;
	public $created_at;
	public $updated_at;

	function __construct($id, $category_id, $title, $content, $count_comments, $slug, $active) {
		$this->id = $id;
		$this->category_id = $category_id;
		$this->title = $title;
		$this->content = $content;
		$this->count_comments = $count_comments;
		$this->slug = $slug;
		$this->active = $active;
	}
}