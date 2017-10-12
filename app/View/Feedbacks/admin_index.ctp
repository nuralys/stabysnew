<h1>Оставленные заявки</h1>
<?php //debug($data)?>
 <?php if(!empty($data)): ?>
<table>
	<tr>
		<th>ID</th>
		<th>Имя</th>
		<th>E-mail</th>	
		<th>Текст</th>	
		<th>Действия</th>	
	</tr>
 	<?php foreach($data as $item): ?>
 	<tr>
 		<td><?=$item['Feedback']['id']?></td>
 		<td><?=$item['Feedback']['title']?></td>
 		<td><?=$item['Feedback']['email']?></td>
 		<td><?=$item['Feedback']['body']?></td>
 		<td><?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Feedback']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>

	<?php endforeach ?>
	</tr>
</table>
<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>