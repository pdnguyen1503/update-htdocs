<?php require_once SYSTEM_PATH . '/View/header.php' ?>

                    <h1 class="page-header">Edit Post</h1>
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

                        <table style="margin-top: 30px;">
                            <tr>
                                <th>Bai Viet</th>
                                <th>Phan sua</th>
                            </tr>
                    
                            <?php foreach ($list as $value): ?>
                            <tr>
                                <td>1 id</td>
                                <td ><?php echo $value->id; ?></td>
                            </tr>
                            <tr>
                                <td>2 category_id</td>
                                <td ><input type="text" name="" value="<?php echo $value->category_id; ?>"></td>
                            </tr>
                            <tr>
                                <td>3 title</td>
                                <td ><input type="text" name="" value="<?php echo $value->title; ?>"></td>
                            </tr>
                            <tr>
                                <td>4 intro</td>
                                <td ><input type="text" name="" value="<?php echo $value->intro; ?>"></td>
                            </tr>
                            <tr>
                                <td>5 content</td>
                                <td ><input type="text" name="" value="<?php echo $value->content; ?>"></td>
                            </tr>
                            <tr>
                                <td>6 image</td>
                                <td ><input type="text" name="" value="<?php echo $value->image; ?>"></td>
                            </tr>
                            <tr>
                                <td>7 tag</td>
                                <td ><input type="text" name="" value="<?php echo $value->tag; ?>"></td>
                            </tr>
                            <tr>
                                <td>8 description</td>
                                <td ><input type="text" name="" value="<?php echo $value->description; ?>"></td>
                            </tr>
                            <tr>
                                <td>9 count_comment</td>
                                <td ><input type="text" name="" value="<?php echo $value->count_comment; ?>"></td>
                            </tr>
                            <tr>
                                <td>10 slug</td>
                                <td ><input type="text" name="" value="<?php echo $value->slug; ?>"></td>
                            </tr>
                            <tr>
                                <td>11 active</td>
                                <td ><input type="text" name="" value="<?php echo $value->active; ?>"></td>
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
