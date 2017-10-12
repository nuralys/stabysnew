<div class="title admin_t">
		<h2>Редактирование</h2>
	</div>
<?php 

// debug($c_list);
echo $this->Form->create('Category', array('type' => 'file'));?>

<div class="input select">
<label for="CategoryParentId">Родительская категории:</label>
	<select name="data[Category][parent_id]" id="CategoryParentId">
		<option value="">Выберите категорию</option>
		<option value="">---</option>
		<?php foreach($categories as $key => $value): ?>
			<option value="<?=$key?>" <?= ($data['Category']['parent_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<div class="input select">
<label for="CategoryParentCats">Есть ли дочерние категории?</label>
	<select name="data[Category][parent_cats]" id="CategoryParentCats">
		<option value="">-</option>
		<option value="1" <?= ($data['Category']['parent_cats'] == 1)? 'selected' : '' ?>>Да</option>
		<option value="0" <?= ($data['Category']['parent_cats'] == 0)? 'selected' : '' ?>>Нет</option>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название', 'class' => ''));
echo $this->Form->input('alias', array('label' => 'alias:'));
echo $this->Form->end('Редактировать');
?>