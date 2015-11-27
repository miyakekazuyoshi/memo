<?=$this->Form->create();?>
<?=$this->Form->input('type');?>
<?=$this->flash->render();?>
<?=$this->Form->submit('送信');?>
<?=$this->Form->end();?>