

<table>
	<tr>users
		<th>id</th>
		<th>お名前</th>
		<th>パスワード</th>
		<th>年齢</th>
		<th>性別</th>
		<th>編集リンク</th>
	</tr>
	
<?php foreach($users as $user){ ?>
	<tr>
		<td><?=$user['User']['id'];?></td>
		<td><?=$user['User']['name'];?></td>
		<td><?=$user['User']['password'];?></td>
		<td><?=$user['User']['age'];?></td>
		<td><?=$user['User']['gender'];?></td>

		<td><?=$this->Html->link('編集',['action'=>'edit',$user['User']['id']])?>
			<?=$this->Html->link('詳細',['action'=>'view',$user['User']['id']])?>
			<?=$this->Html->link('削除',['action'=>'delete',$user['User']['id']],
			null,'本当に削除してもよろしいですか？');?>
		</td>
	</tr>

<?php }?>
</table>

	
