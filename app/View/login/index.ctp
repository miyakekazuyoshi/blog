

<?=$this->Form->create();?>
<h2>パスワードを入力してください</h2>
<?=$this->Form->input('password');?>

<?=$this->Form->submit('ログイン');?>
<p> <?=$this->Html->link('新規登録',array('controller'=>'users','action'=>'add'))?></p>
<?=$this->Form->end();?>
