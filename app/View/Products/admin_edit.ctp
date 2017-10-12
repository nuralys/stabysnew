<?php //debug($data); ?>
<div class="admin_add">
	<div class="ad_up">
		<h2>Редактирование материала</h2>
	</div>
<?php 

echo $this->Form->create('Product', array('type' => 'file'));?>

<div class="input select">
<label for="ProductCategoryId">Категории:</label>
	<select required name="data[Product][category_id]" id="ProductCategoryId">
		<option value="">Выберите категорию</option>
		<?php foreach($categories as $key => $value): ?>
			<option value="<?=$key?>" <?= ($data['Product']['category_id'] == $key)? 'selected' : '' ?>><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?php
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('model', array('label' => 'Модель'));
echo $this->Form->input('manufaturer', array('label' => 'Производитель'));
echo $this->Form->input('size', array('label' => 'Размер'));
echo $this->Form->input('product_type', array('label' => 'Тип продукции'));
echo $this->Form->input('cover_type', array('label' => 'Покрытие'));
echo $this->Form->input('color', array('label' => 'Цвет'));
echo $this->Form->input('thickness', array('label' => 'Толщина'));
echo $this->Form->input('specification', array('label' => 'Спецификация', 'id' => 'editor2'));
echo $this->Form->input('advantages', array('label' => 'Преимущества', 'id' => 'editor3'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));?>
<div class="input select">
<label for="ProductCategoryId">Тип:</label>
	<select name="data[Product][type]" id="ProductType">
		<option value="">Выберите тип</option>
		<option value="unitazy" <?= ($data['Product']['type'] == 'unitazy')? 'selected' : '' ?>>
			Унитазы
		</option>
		<option value="rakoviny" <?= ($data['Product']['type'] == 'rakoviny')? 'selected' : '' ?>>
			Раковины
		</option>
		<option value="vodyanye" <?= ($data['Product']['type'] == 'vodyanye')? 'selected' : '' ?>>
			Водяные
		</option>
		<option value="elektricheskie" <?= ($data['Product']['type'] == 'elektricheskie')? 'selected' : '' ?>>
			Электрические
		</option>
		
	</select>
</div>
<?php
echo $this->Form->input('published', array('type'=>'checkbox','hiddenField' => false, 'label'=>'Опубликован'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова', 'placeholder' => 'Ключевые слова '));
echo $this->Form->input('description', array('label' => 'Описание', 'placeholder' => 'Описание '));
?>
<div class="edit_bot">
	<div class="bot_r">
	<?
	
	echo $this->Form->input('id');
	echo $this->Form->end('Редактировать');
	?>
	</div>
</div>

</div>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor2' );
</script>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor3' );
</script>