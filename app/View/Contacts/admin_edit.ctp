<div class="title admin_t">Редактирование контактов</div>

<div class="model_info">
<?php 
echo $this->Form->create('Contact');
echo $this->Form->input('title', array('label' => 'Заголовок', 'class' => ''));
echo $this->Form->input('address', array('label' => 'Адрес', 'class' => ''));
echo $this->Form->input('phone', array('label' => 'Телефон', 'class' => ''));
echo $this->Form->input('mobile', array('label' => 'Мобильный телефон:',));
echo $this->Form->input('email', array('label' => 'E-mail:',));
echo $this->Form->input('maps', array('label' => 'Карта:',));
echo $this->Form->input('keywords', array('label' => 'Ключевые слова(для поисковиков):', 'class' => ''));
echo $this->Form->input('description', array('label' => 'Описание(для поисковиков):', 'class' => ''));
?>
</div>
<?
echo $this->Form->end('Редактировать');
?>
</div>