<div class="catalog-up">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__li">
      <a href="/">Главная</a>
    </li>
    <li class="breadcrumbs__li">
    Продукция
    </li>
    <li class="breadcrumbs__li">
      <a href="/category/<?=$data['Category']['alias']?>"><?=$data['Category']['title']?></a>
    </li>
    <li class="breadcrumbs__li"><?=$data['Product']['title'] ?></li>
  </ul>
  <h1 class="up-heading up-heading--content">Карточка товара</h1>
</div>
<div class="product">
  <div class="product__img">
    <img alt="<?=$data['Product']['title']?>" src="/img/product/<?=$data['Product']['img']?>">
    <div class="product-zakas">                             
      <p class="product-zakas__price"><span>12000</span> KZT</p>
      <div class="product-zakas__center">
        <div class="center-add">
          <span class="add add--minus">-</span>
          <input type="text" class="kolvo" value="1">
          <span class="add add--plus">+</span>
        </div>
      </div>
      <button data-id="1" class="product-zakas__add">Добавить в корзину</button>  
    </div>
  </div>
  <div class="product__right">
    <div class="product-des">
      <span class="product-des__heading">
        <?=$data['Product']['title']?>
      </span> 
      
      <div class="tabs">
      <?php if(!empty($data['Product']['body'])): ?>
        <div class="tabs__item tabs__item--active">
          Описание
        </div>
          <?php endif ?>
        <?php if(!empty($data['Product']['specification'])): ?>
        <div class="tabs__item">
          Спецификация
        </div>
         <?php endif ?>
        <?php if(!empty($data['Product']['advantages'])): ?>
        <div class="tabs__item">
          Преимущества
        </div>
         <?php endif ?>
      </div>
      <div class="info-tabs">
      <?php if(!empty($data['Product']['body'])): ?>
        <div class="tabs-des">
          <?=$data['Product']['body']?>
        </div>
        <?php endif ?>
        <?php if(!empty($data['Product']['specification'])): ?>
        <div class="tabs-des">
          <?=$data['Product']['specification']?>
        </div>
        <?php endif ?>
        <?php if(!empty($data['Product']['advantages'])): ?>
        <div class="tabs-des">
          <?=$data['Product']['advantages']?>
        </div>
        <?php endif ?>

        <!-- хар-ки для кафеля -->
        <?php if($data['Product']['product_type']): ?>
          <p><strong>Тип продукции:</strong> <?php echo $data['Product']['product_type'];?></p>
        <?php endif ?>
        <?php if($data['Product']['cover_type']): ?>
          <p><strong>Тип покрытия:</strong> <?php echo $data['Product']['cover_type'];?></p>
        <?php endif ?>
        <?php if($data['Product']['size']): ?>
          <p><strong>Размер:</strong> <?php echo $data['Product']['size'];?></p>
        <?php endif ?>
        <?php if($data['Product']['color']): ?>
          <p><strong>Цвет:</strong> <?php echo $data['Product']['color'];?></p>
        <?php endif ?>
        <?php if($data['Product']['thickness']): ?>
          <p><strong>Толщина (мм):</strong> <?php echo $data['Product']['thickness'];?></p>
        <?php endif ?>
<?php if(isset($this->request->query['tabys']) && $this->request->query['tabys']==1): ?>
  <?php debug($data); ?>
<?php endif ?>
      </div>
      <a href="#pozvonim" class="zakas" >Получить бесплатную консультацию</a>  
    </div>
  </div>
</div>
<?php if(is_array($childs)): ?>
<ul class="additional">
<?php foreach($childs as $item): ?>
  <li class="additional__item">
    <div class="kafel">
      <img class="kafel__img" src="/img/product/<?=$item['Product']['img']?>">
      <div class="kafel-text">
        <span class="kafel-text__heading">
          <?=$item['Product']['title']?>
        </span>
        <p>Тип продукции: <?=$item['Product']['product_type']?></p>
        <p>Тип покрытия: <?=$item['Product']['cover_type']?></p>
        <p>Цвет: <?=$item['Product']['color']?></p>
        <p>Толщина (мм): <?=$item['Product']['thickness']?></p>
        <p>Размер (мм.): <?=$item['Product']['size']?></p>
      </div>
    </div>
  </li>
<?php endforeach ?>
</ul>
<?php endif ?>

<!-- <div id="modal_form">
    <span id="modal_close">X</span> 
    <div class="zakas-part">
      <span class="zakas-part__heading">Заказать товар</span>
      <div class="z-row">
        <label class="z-row__label">Имя:</label>
        <input class="z-row__input" type="text" placeholder="Имя..">
      </div>
      <div class="z-row">
        <label class="z-row__label">Почта:</label>
        <input class="z-row__input" type="text" placeholder="Почта..">
      </div>
      <div class="z-row">
        <label class="z-row__label">Номер:</label>
        <input class="z-row__input" type="text" placeholder="Номер..">
      </div>
      <button class="zakas" type="submit">Закать</button>
    </div>
</div>
<div id="overlay"></div> -->
