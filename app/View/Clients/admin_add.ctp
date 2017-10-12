<div class="title admin_t">
	<h2>Добавление материала</h2>
</div>
<?php 
echo $this->Form->create('Client', array('type' => 'file'));
echo $this->Form->input('title', array('label' => 'Название'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->input('link', array('label' => 'Ссылка', 'placeholder' => 'http://google.kz'));
echo $this->Form->end('Создать');
?>