<h2><?=$msg; ?></h2>
<?=$this->Html->link('書き込む',['controller'=>'articles','action'=>'add']) ?><br>
<?=$this->Html->link('記事一覧',['controller'=>'index']) ?><br>
<?=$this->Html->link('コメント一覧',['controller'=>'comments','action'=>'index']) ?><br>
<?=$this->Html->link('アカウント情報',['controller'=>'users','action'=>'index']) ?><br>