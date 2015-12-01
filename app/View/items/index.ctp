<p><?=$this->Html->link('追加',['action'=>'add'])?></p>

	<td>
		<table>
			<tr>item
				<th>type</th>
				<th>編集</th>
			</tr>
			
	<?php foreach($items as $item){?>
		<tr>
			<td><?=$item['Item']['type'];?></td>	
		
			<td><?=$this->Html->link('編集',['action'=>'edit',$item['Item']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$item['Item']['id']],
				null,'本当に削除してもよろしいですか？');?>
			</td>
		</tr>
	<?php }?>

	<?=$this->Html->link('戻る',['controller'=>'menu']);?>