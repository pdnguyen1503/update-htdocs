
<html>
<body>
<form action="http://localhost/mvc_sample/index.php?c=Post&a=Store" method="post">

  <form action="" method="post" role="form" enctype="multipart/form-data">
      <div class="form-group">
        <label>Id bai viet</label>
        <input type="form-control" name="id">
        <p class="help-block"> example block-level</p>
      </div>
      <div class="form-group">
        <label>category_id bai viet</label>
        <input type="form-control" name="category_id">
      </div>
      <div class="form-group">
        <label>Title bai viet</label>
        <textarea cols="20" rows="2" class="form-control" name="title"></textarea>
      </div>
      <div class="form-group">
        <label>intro bai viet</label>
        <textarea cols="20" rows="3" class="form-control" name="intro"></textarea>
      </div>
      <div class="form-group">
        <label>content bai viet</label>
        <textarea cols="20" rows="5" class="form-control" name="content"></textarea>
      </div>
      <div class="form-group">
        <label>image bai viet</label>
        <textarea cols="20" rows="1" class="form-control" name="image"></textarea>
      </div>
      <div class="form-group">
        <label>tag bai viet</label>
        <textarea cols="20" rows="2" class="form-control" name="tag"></textarea>
      </div>
      <div class="form-group">
        <label>description bai viet</label>
        <textarea cols="20" rows="3" class="form-control" name="description"></textarea>
      </div>
      <div class="form-group">
        <label>count_comment bai viet</label>
        <input type="text" name="count_comment">
      </div>
      <div class="form-group">
        <label>slug bai viet</label>
        <input type="text" name="slug">
      </div>
      <div class="form-group">
        <label>active bai viet</label>
        <input type="text" name="active">
      </div>
      <div class="form-group text-center">
        <input class="btn-btn-lg btn-primary" type="submit" value="save" name="save">
      </div>
  </form>
</form>
</body>
</html>