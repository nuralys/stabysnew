<div class="title admin_t">
		<h2>Добавление материала</h2>
	</div>
<?php
echo $this->Form->create('Product', array('type' => 'file'));?>
<div class="input select">
<label for="ProductCategoryId">Категории:</label>
	<select required name="data[Product][category_id]" id="ProductCategoryId">
		<option value="">Выберите категорию</option>
		<?php foreach($categories as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?php if(is_array($products)): ?>
<div class="input select" id="ParentElements" style="display:none;">
<label for="ProductParentId">Родительский элемент:</label>
	<select name="data[Product][parent_id]" id="ProductParentId">
		<option value="">Выберите элемент</option>
		<?php foreach($products as $key => $value): ?>
			<option value="<?=$key?>"><?=$value?></option>
		<?php endforeach ?>
	</select>
</div>
<?php endif ?>
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
		<option value="unitazy">Унитазы</option>
		<option value="rakoviny">Раковины</option>
		<option value="vodyanye">Водяные</option>
		<option value="elektricheskie">Электрические</option>
	</select>
</div>
<?php
echo $this->Form->input('published', array('type'=>'checkbox','hiddenField' => false, 'label'=>'Опубликован', 'checked'));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова', 'placeholder' => 'Ключевые слова '));
echo $this->Form->input('description', array('label' => 'Описание', 'placeholder' => 'Описание '));
echo $this->Form->end('Создать');
?>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor' );
</script>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor2' );
</script>
<script type="text/javascript">
	 CKEDITOR.replace( 'editor3' );
</script>
<script type="text/javascript">
	$('#ProductCategoryId').on('change', function() {
  if(this.value == 4){
$('#ParentElements').show()
  }else{
  	$('#ParentElements').hide()
  }
});
</script>