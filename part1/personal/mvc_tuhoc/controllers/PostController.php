<?php

  class PostController{
    //viet ham
    public function getPost(){
      require_once('models/Postmodel.php');
      $postmodel = new PostModel;
      $posts = $postmodel->getPost();

      require_once('views/postview.php');
      $postview = new PostView();
      $postview->showAllPost($posts);
      // print_r($posts);  dung de kiem tra da lay du lieu chua
    }
    // goi den view de lay ham chua form-add-post
    public function addPost(){
      require_once('views/postview.php');
      $postview = new PostView(); // vatiable postview kiem tra bai
      $postview->formAddPost(); //goi den ham formaddpost de dan den form add
    }

    public function editPost(){
      require_once('views/postview.php');
      $postview = new PostView();
      $postview->$postview->formEditPost();
    }

    // viet ham goi den
    public function doAdd(){
      // lay cac bien title., tag, img....
      // require_once('models/Postmodel.php');
      $category_id        = $_POST['category_id'];
      $title              = $_POST['title'];
      $intro              = $_POST['intro'];
      $content            = $_POST['content'];
      $image              = $_POST['image'];
      $tag                = $_POST['tag'];
      $description        = $_POST['description'];
      $count_comment      = $_POST['count_comment'];
      $slug               = $_POST['slug'];
      $active             = $_POST['active'];
      // echo $title . '<br>';
      // echo $content . '<br>';
      // echo $urlThumbnail . '<br>';
      // echo $tag . '<br>';
      //  check data
      // can cong viec check du lieu. validation
      // end check
      $post = array(
        'category_id'     => $category_id,
        'title'           => $title,
        'intro'           => $intro,
        'content'         => $content,
        'image'           => $image,
        'tag'             => $tag,
        'description'     => $description,
        'count_comment'   => $count_comment,
        'slug'            => $slug,
        'active'          => $active,
      );


      // tra ve view cai trang thai chen du lieu vao data
      require_once('models/Postmodel.php');
      $postmodel = new PostModel;
      $status = $postmodel->addPost($post);
      // echo $status;
      // tra ve view
      require_once('views/postview.php');
      $postview = new PostView();
      $postview->notifyAddPost($status);

    }
  }
 ?>
 <!-- Route::get('duongdan','class & funtion'); -->
 <!-- truyen tham so truc tiep -->
 <!-- Route::get( Hello/{ten?}', function($ten= ‘default’){
         return “Chào bạn” . $ten;
} ); -->
 <!-- cac ham viet trong controlller -->