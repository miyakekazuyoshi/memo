<?=$this->Form->create();?>
<?=$this->Form->input('name');?>
<?=$this->Form->input('password');?>
<?=$this->flash->render();?>
<?=$this->Form->submit('送信');?>
<?=$this->Form->end();?>