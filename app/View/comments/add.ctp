<?=$this->Form->create();?>
<?=$this->Form->input('article_id',['options'=>$articles]);?>
<?=$this->Form->input('content');?>
<?=$this->flash->render();?>
<?=$this->Form->submit('送信');?>
<?=$this->Form->end();?>