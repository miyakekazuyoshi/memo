<p><?=$this->Html->link('追加',['action'=>'add']);?></p>
<table>
	<tr>users
		<th>id</th>
		<th>名前</th>
		<th>パスワード</th>
		<th>編集</th>
	</tr>
	
	<?php foreach($users as $user) {?>
		<tr>
			<td><?=$user['User']['id'];?></td>
			<td><?=$user['User']['name'];?></td>
			<td><?=$user['User']['password'];?></td>
		
			<td><?=$this->Html->link('編集',['action'=>'edit',$user['User']['id']])?>
				<?=$this->Html->link('詳細',['action'=>'view',$user['User']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$user['User']['id']],
				null,'本当に削除してもよろしいですか？');?>
			</td>
		</tr>
		
	<?php }?>
</table>