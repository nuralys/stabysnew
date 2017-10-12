<div class="title admin_t">
		<h2>Добавление категории</h2>
	</div>
<?php 
echo $this->Form->create('Category', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('alias', array('label' => 'Alias', 'placeholder'=>'svadebnye-platjya'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
?>
<div class="input select">
<label for="CategoryParentId">Родительская категория:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="">Выберите категорию</option>
		<?php foreach($c_list as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<div class="input select">
<label for="CategoryParentCats">Есть ли дочерние категории?</label>
	<select name="data[Category][parent_cats]" id="CategoryParentCats">
		<option value="">-</option>
		<option value="1">Да</option>
		<option value="0">Нет</option>
	</select>
</div>
<?php
echo $this->Form->end('Создать');
?>