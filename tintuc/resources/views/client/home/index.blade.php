@extends('client.layouts.layout')
@section('index')

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8">

        <h1>Danh sach cac bai viet:</h1>
                <?php
foreach ($list as $key => $item) {

?>
        <div class="list-post post1">
          <div class="img-post">
          <img src=" <?php echo $item->image ?>" alt="">
          </div>
          <h3><?php echo $item->title ?></h3>
          <p><?php echo $item->intro?></p>
          <p><?php echo $item->content?></p>
          <a href="index.php?c=Home&a=Detail&id=<?php echo $item->id ?>" class="btn btn-primary">Read More &rarr;</a>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
        </div>
        <?php } ?>
      </div>

     <div class="col-sm-0 col-md-4 caterory">
        <div class="card">
          <h5>Categories</h5>
          <div class="card-body">
            <?php
            foreach ($categories as $key => $value) {
             echo '<a href="index.php?c=Home&a=ViewByCategory&id='.$value->id.'"  >'.$value->name.'</a>';
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>



@stop