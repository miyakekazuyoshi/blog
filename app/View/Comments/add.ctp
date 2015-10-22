<?=$this->Form->create();?>
<?=$this->Form->input('title');?>
<?=$this->Form->input('body');?>
<?=$this->Form->input('created');?>
<?=$this->Form->input('modifled');?>

<?=$this->Form->submit('送信');?>


<?=$this->Form->end()?>