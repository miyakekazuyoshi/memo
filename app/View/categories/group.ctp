<td>
	<table>
		<tr>article
			<th>user</th>
			<th>item</th>
			<th>title</th>
			<th>content</th>
		</tr>
		
	<?php foreach($articles as $article) { ?>
		<tr>
			<td><?=$article['User']['name'];?></td>
			<td><?=$article['Item']['type'];?></td>
			<td><?=$article['Article']['title'];?></td>
			<td><?=$article['Article']['content'];?></td>
		</tr>
	<?php }?>