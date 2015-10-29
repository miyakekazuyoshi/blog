<h2>記事の追加</h2>
<?=$this->Form->create();?>
<?=$this->Form->input('title');?>
<?=$this->Form->input('body');?>
<?=$this->Form->input('created');?>
<?=$this->Form->input('modifled');?>


<?=$this->Form->file('image');?>

<?=$this->Form->submit('画像を添付');?>
<?=$this->Form->submit('送信');?>
<?=$this->Form->end()?>
