<?=$this->Form->create();?>
<?=$this->Form->input('user_id',['options'=>$users]);?>
<?=$this->Form->input('item_id',['options'=>$items]);?>
<?=$this->Form->input('title');?>
<?=$this->Form->input('content');?>
<?=$this->Form->submit('送信');?>
<?=$this->flash->render();?>
<?=$this->Form->end();?>
