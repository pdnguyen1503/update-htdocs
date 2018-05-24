<?php
class PostView{

  // ham goi den bai hien thi post
  public function showAllPost($posts){
    require_once('template/post.php');
  }

  // ham goi den bai viet add post
  public function formAddPost(){
    require_once('template/formaddpost.php');
  }

  public function formEditPost(){
     require_once('template/formeditpost.php');
  }

  public function notifyAddPost($status){
    if ($status) {
      echo 'insert success, <a href="http://nguyena2/personal/mvc_tuhoc/?action=list">click go to post';
    }else{
      echo "add fail";
    }
  }
}
 ?>
