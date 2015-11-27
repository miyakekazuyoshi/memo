<p><?=$this->Html->link('追加',['action'=>'add']);?></p>
<table>
	<tr>comments
		<th>対象記事</th>
		<th>本文</th>		
		<th>リンク</th>
	</tr>
	
<?php foreach($comments as $comment) { ?>
	<tr>
		<td><?=$comment['Article']['title'];?></td>
		<td><?=$comment['Comment']['content'];?></td>	
		

		<td><?=$this->Html->link('編集',['action'=>'edit',$comment['Comment']['id']])?>
		    <?=$this->Html->link('詳細',['action'=>'view',$comment['Comment']['id']])?>
		    <?=$this->Html->link('削除',['action'=>'delete',$comment['Comment']['id']],
		    	null,'本当に削除してもよろしいですか？')?></td>
	</tr>
<?php }?>
</table>
