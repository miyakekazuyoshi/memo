<?=$this->Form->create();?>
<?=$this->Form->input('name');?>
<?=$this->Form->input('password');?>
<?=$this->Form->submit('送信');?>
<?=$this->flash->render();?>
<?=$this->Form->end();?>

