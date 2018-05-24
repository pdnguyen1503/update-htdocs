<?php require_once SYSTEM_PATH . '/View/header.php' ?>

                    <h1 class="page-header">Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data post
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <a href="?index.php?c=Post&a=Add" style="background-color: red; padding: 10px; margin-top: 8px;">ADD POST</a>

                        <table style="margin-top: 30px;" class="table">
                            <tr>
                                <th>1 id</th>
                                <th>2 category_id</th>
                                <th>3 title</th>
                                <th>4 intro</th>
                                <th>5 content</th>
                                <th>6 image</th>
                                <th>7 tag</th>
                                <th>8 description</th>
                                <th>9 count_comment</th>
                                <th>10 slug</th>
                                <th>11 active</th>
                                <th>12 Edit</th>
                                <th>13 Delete</th>
                            </tr>
                            <?php foreach ($list as $value): ?>
                            <tr>
                                <td ><?php echo $value->id; ?></td>
                                <td ><?php echo $value->category_id; ?></td>
                                <td ><?php echo $value->title; ?></td>
                                <td ><?php echo $value->intro; ?></td>
                                <td ><?php echo $value->content; ?></td>
                                <td ><?php echo $value->image; ?></td>
                                <td ><?php echo $value->tag; ?></td>
                                <td ><?php echo $value->description; ?></td>
                                <td ><?php echo $value->count_comment; ?></td>
                                <td ><?php echo $value->slug; ?></td>
                                <td ><?php echo $value->active; ?></td>
                                <td ><a href="index.php?c=Post&a=Edit&id=<?php echo $value->id?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                                <td ><a href=""><i class="glyphicon glyphicon-trash"></i></a></td>
                            </tr>
                            <?php endforeach ?>
                        </table>

                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php require_once SYSTEM_PATH . '/View/footer.php'?>
    <!-- jQuery -->
