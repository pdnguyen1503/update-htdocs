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
    function AddPost(){
        $con = $this->connect();
        // add du lieu
        $query ="INSERT INTO `posts` (`id`,`category_id`, `title`, `intro`,`content`,`image`,`tag`, `description`, `count_comment`, `slug`,`active`) VALUES (NULL, '".$post['category_id']."', '".$post['title']."', '".$post['intro']."', '".$post['content']."', '".$post['image']."', '".$post['tag']."', '".$post['description']."', '".$post['count_comment']."', '".$post['slug']."', '".$post['active']."')";
         $rs = $con->query($sql);
      // echo $rs; tra 1
          if ($rs) {
            // echo "success";
            return true;
          }
          else
          {
            echo "khong success";
            return false;
      }
    }
}


 ?>