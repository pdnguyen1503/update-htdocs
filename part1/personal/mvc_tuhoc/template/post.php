<?php require_once('views/header.php'); ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>list blog</title>
    <link rel="stylesheet" type="text/css" href="Asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- lay cac bai post ra -->
    <?php foreach ($posts as $post) : ?>
      <div class="row">
        <div class="col-md-4">
          <img style="max-width: 100%" src=" <?php echo $post['url_thumbnail'] ?>" >
        </div>
        <div class="col-md-8">
          <p><?php echo $post['category_id']; ?></p>
          <p><?php echo $post['title']; ?></p>
          <p><?php echo $post['intro']; ?></p>
          <p><?php echo $post['content']; ?> </p>
          <p><?php echo $post['image']; ?> </p>
          <p><?php echo $post['tag']; ?> </p>
          <p><?php echo $post['description']; ?> </p>
          <p><?php echo $post['count_comment']; ?> </p>
          <p><?php echo $post['slug']; ?> </p>
          <p><?php echo $post['active']; ?> </p>
        </div>
      </div>
      <hr>
    <?php endforeach; ?>
  </body>
  </html>
<?php require_once('views/footer.php'); ?>
