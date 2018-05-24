<?php
include SYSTEM_PATH.'/View/header.php';?>

<h1>Home</h1>
<p>hhh</p>
<?php var_dump($list); ?>
<?php die('a'); ?>

<table>
    <?php foreach ($list as $key => $value) :?>
	<tr>
	    <td><<?php echo $value->id; ?></td>
	    <td><?php echo $value->title; ?></td>
	</tr>
<?php endforeach; ?>
</table>
<?php
include SYSTEM_PATH.'/View/footer.php';
?>