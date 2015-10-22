
<?=$this->Form->create();?>

<h2>登録情報</h2>

<?=$this->Form->input('name');?>

<?=$this->Form->input('password');?>

<?=$this->Form->input('gender');?>

<?=$this->Form->input('age');?>


<?=$this->Form->submit('送信');?>
<?=$this->Form->end()?>