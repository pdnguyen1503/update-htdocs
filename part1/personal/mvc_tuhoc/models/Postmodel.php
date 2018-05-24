<?php
// thao tac voi database
  require_once('Db.php');
  class PostModel extends DbModel{

    public function getPost(){
      $con = $this->connect();
      $result = $con->query("SELECT * FROM posts");
      $posts = array();
      if ($result->num_rows > 0){
        while($post = mysqli_fetch_assoc($result)) {
          $posts[] = $post;
        }
      }
      return $posts;
    }


    public function addPost($post){

      $con = $this->connect();
      // chen du lieu vao data

      $sql = "INSERT INTO `posts` (`id`,`category_id`, `title`, `intro`,`content`,`image`,`tag`, `description`, `count_comment`, `slug`,`active`) VALUES (NULL, '".$post['category_id']."', '".$post['title']."', '".$post['intro']."', '".$post['content']."', '".$post['image']."', '".$post['tag']."', '".$post['description']."', '".$post['count_comment']."', '".$post['slug']."', '".$post['active']."')";
         // echo $sql;
      // model tra ve controller.... co thnah cong chen du lieu k
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

    public function editPost($post){
      $con = $this->connect();

      $sql = "UPDATE `posts` SET `category_id`= '".$post['category_id']."',`title`='".$post['title']."',`intro`= '".$post['intro']."',`content`='".$post['content']."',`image`='".$post['image']."',`tag`= '".$post['tag']."', `description`='".$post['description']."',`count_comment`='".$post['count_comment']."',`slug`='".$post['slug']."',`active`='".$post['active']."' WHERE `id`='".$post['id']."'";
      var_dump($sql);
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