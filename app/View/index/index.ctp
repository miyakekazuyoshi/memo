


<?php foreach($articles as $article) { ?>
	<?=$this->Html->link($article['Article']['title'],['controller'=>'articles',
		'action'=>'view',$article['Article']['id']])?>
<?php }?>