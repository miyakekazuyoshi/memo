

		
	<?php foreach($categories as $category) { ?>
		<tr>
			<td><?=$article['User']['name'];?></td>
			<td><?=$article['Item']['type'];?></td>
			<td><?=$article['Article']['title'];?></td>
			<td><?=$article['Article']['content'];?></td>
		</tr>
	<?php }?>