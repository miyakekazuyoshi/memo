

<?php foreach($categories as $category) { ?>
	<?=$this->Html->link($category['Category']['type'],['controller'=>'categories',
		'action'=>'group',$category['Category']['id']])?>

<?php }?>
		