<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Tag</th>
        <th>Description</th>
    </tr>
	<?php
	foreach ( $result as $item ) {
		?>
        <tr>
            <td><?php echo $item->id ?></td>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->tag ?></td>
            <td><?php echo $item->description ?></td>
        </tr>
		<?php
	}
	?>
</table>
