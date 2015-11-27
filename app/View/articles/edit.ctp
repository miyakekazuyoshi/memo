<?=$this->Form->create();?>
<?=$this->Form->input('title');?>
<?=$this->Form->input('content');?>
<?=$this->flash->render();?>
<?=$this->Form->submit('送信');?>
<?=$this->Form->end();?>