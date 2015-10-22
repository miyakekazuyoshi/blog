<h2>記事詳細</h2>
<dl>
	<dt>タイトル</dt>
	<dd><?=$article['Article']['title']?></dd>

	<dt>本文</dt>
	<dd><?=nl2br($article['Article']['body'])?></dd>

	<dt>作成時間</dt>
	<dd><?=$article['Article']['created']?></dd>

	<dt>編集時間</dt>	
	<dd><?=$article['Article']['modifled']?></dd>

</dl>





<h2>コメント一覧</h2>
<dl>
	<dt>タイトル</dt>
		<dd><?=$comment['Comment']['title']?></dd>

	<dt>本文</dt>
		<dd><?=$comment['Comment']['body']?></dd>

	<dt>作成時間</dt>
		<dd><?=$comment['Comment']['created']?></dd>

	<dt>編集時間</dt>
		<dd><?=$comment['Comment']['modifled']?></dd>

</dl>				


<?=$this->Html->link('コメントする',['controller'=>'comments','action'=>'add']);?>