<h1>Список продукции</h1>
<a href="/admin/products/add">Добавить новый продукт</a>
<?php //debug($data)?>
 <?php if(!empty($data)): ?>
<table>
	<tr>
		<th>ID</th>
		<th>Изображение</th>
		<th>Название</th>
		<th>Дествия</th>	
	</tr>
 	<?php foreach($data as $item): ?>
 	<tr>
 		<td><?=$item['Product']['id']?></td>
 		<td><img src="/img/product/<?=$item['Product']['img']?>" width="100px"></td>
 		<td><?=$item['Product']['title']?></td>
 		<td><a href="/admin/products/edit/<?=$item['Product']['id']?>">Редактировать</a> |
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Product']['id']), array('confirm' => 'Подтвердите удаление')); ?></td>

	<?php endforeach ?>
	</tr>
</table>
<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>