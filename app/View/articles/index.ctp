<p><?=$this->Html->link('追加',['action'=>'add']);?></p>
<?=$this->Html->link('コメントする',['controller'=>'comments','action'=>'add'])?><br>
<td>
	<table>
		
		<tr>article
			<th>user</th>
			<th>item</th>
			<th>title</th>
			<th>content</th>
			<th>編集</th>
		</tr>
		
	<?php foreach($articles as $article) {?>
		<tr>
			<td><?=$article['User']['name'];?></td>
			<td><?=$article['Item']['type'];?></td>			
			<td><?=$article['Article']['title'];?></td>
			<td><?=$article['Article']['content'];?></td>

			<td><?=$this->Html->link('編集',['action'=>'edit',$article['Article']['id']])?>
				<?=$this->Html->link('詳細',['action'=>'view',$article['Article']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$article['Article']['id']],
				null,'本当に削除してもよろしいですか。');?></td>
			</tr>
		</tr>

	<?php }?>

	<div align='center'>
		<?=$this->Paginator->prev('<- 前へ',array(),null,array('class'=>'prev disabled'));?>
		<?=$this->Paginator->numbers(array('separator'=>''));?>
		<?=$this->Paginator->counter(array('format'=>'前%count%件'));?>
		<?=$this->Paginator->counter(array('format'=>'{:page}/{:pages}ページを表示'));?>
		<?=$this->Paginator->next('次へ ->',array(),null,array('class'=>'next disabled'));?>
	</div>
		<?=$this->Form->create('Article',array('action'=>'index'));?>
		<?=$this->Form->input('search');?>
		<br>
		Item<br>
		<br>

		<label><input type="checkbox"name="item_id[]"value="3">error</label>
		<br>
		<label><input type="checkbox"name="item_id[]"value="4">syntax</label>
		<br>
		<label><input type="checkbox"name="item_id[]"value="5">function</label>
		<br>
		<label><input type="checkbox"name="item_id[]"value="6">その他</label>
		<br>
		
		<?=$this->Form->end('検索');?>

	<div align='right'>
		<?=$this->Html->link('戻る',['controller'=>'menu']);?>
	</div>	
	