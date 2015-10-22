
<h2>記事一覧</h2>


<?php foreach($articles as $article){ ?>

	<?=$this->Html->link($article['Article']['title'],['controller'=>'articles',
	'action'=>'view',$article['Article']['id']]) ?>

<?php } ?>

