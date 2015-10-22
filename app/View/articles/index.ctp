<p><?=$this->Html->link('追加',['action'=>'add'])?></p>

	<td>
		<table>
			<tr>article
				<th>id</th>
				<th>title</th>
				<th>body</th>
				<th>created</th>
				<th>modifled</th>
				<th>編集リンク</th>		
			</tr>

	<?php foreach($articles as $article){ ?>
		<tr>
			<td><?=$article['Article']['id'];?></td>
			<td><?=$article['Article']['title'];?></td>
			<td><?=$article['Article']['body'];?></td>
			<td><?=$article['Article']['created'];?></td>
			<td><?=$article['Article']['modifled'];?></td>

			<td><?=$this->Html->link('編集',['action'=>'edit',$article['Article']['id']])?>
				<?=$this->Html->link('詳細',['action'=>'view',$article['Article']['id']])?>
				<?=$this->Html->link('削除',['action'=>'delete',$article['Article']['id']],
				null,'本当に削除してもよろしいですか？');?>
			</td>	

			
		</tr>
	<?php } ?>