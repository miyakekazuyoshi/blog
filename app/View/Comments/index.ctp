

<table>
<tr>コメント
	<th>title</th>
	<th>body</th>
	<th>created</th>
	<th>modifled</th>
	<th>編集リンク</th>
</tr>

<?php foreach($comments as $comment) { ?>
	<tr>
		<td><?=$comment['Comment']['title'];?></td>
		<td><?=$comment['Comment']['body'];?></td>
		<td><?=$comment['Comment']['created'];?></td>
		<td><?=$comment['Comment']['modifled'];?></td>	

		<td><?=$this->Html->link('編集',['action'=>'edit',$comment['Comment']['id']])?>
			<?=$this->Html->link('詳細',['action'=>'view',$comment['Comment']['id']])?>
			<?=$this->Form->postLink('削除',['action'=>'delete',$comment['Comment']['id']],
			null,'本当に削除してもよろしいですか？'	);?>
		</td>
	</tr>
<?php } ?>
</table>