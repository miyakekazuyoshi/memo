
<?=$this->Form->create('Article',array('action'=>'index'));?>
<?=$this->Form->input('search');?>

<?=$this->Form->input('error',array(
	'type'=>'checkbox',
	'options'=>$title,
	));?>
<?=$this->Form->input('syntax',array(
	'type'=>'checkbox',
	'options'=>$title,
	));?>
<?=$this->Form->input('function',array(
	'type'=>'checkbox',
	'options'=>$title,
	));?>	
<?=$this->Form->input('その他',array(
	'type'=>'checkbox',
	'options'=>$title,
	));?>
<?=$this->Form->end('検索');?>
