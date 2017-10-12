<div class="catalog-up">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__li">
            <a href="/">Главная</a>
        </li>
        <li class="breadcrumbs__li">Продукция</li>
        <li class="breadcrumbs__li">
      <a href="/category/<?=(isset($data['Category']['alias']))? $data['Category']['alias'] : $data[0]['Category']['alias']?>"><?=(isset($data['Category']['title']))? $data['Category']['title'] : $data[0]['Category']['title']?></a>
    </li>
    </ul>
    <h1 class="up-heading up-heading--content">Продукция</h1>
    
</div>  
<div class="catalog">
    <ul class="left-category">
        <li class="left-category__item">
            <a class="category-option category-option--cab <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'dushevye-kabiny')? "category-option--active" : "" ?>" href="/category/dushevye-kabiny">Душевые кабины</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--forbath <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'mebel-dlya-vannoy-komnaty')? "category-option--active" : "" ?>" href="/category/mebel-dlya-vannoy-komnaty">Мебель для ванной комнаты</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--sanfoyas <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'sanfayans')? "category-option--active" : "" ?>" href="/category/sanfayans">Санфаянс</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--kafel <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'kafel')? "category-option--active" : "" ?>" href="/category/kafel">Кафель</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--smes <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'smesiteli')? "category-option--active" : "" ?>" href="/cats/smesiteli">Смесители</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--bath <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'vanny')? "category-option--active" : "" ?>" href="/category/vanny">Ванны</a>
        </li>
        <li class="left-category__item">
            <a class="category-option  category-option--sushka <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'polotencesushiteli')? "category-option--active" : "" ?>" href="/category/polotencesushiteli">Полотенцесушители</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--akses <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'aksessuary')? "category-option--active" : "" ?>" href="/cats/aksessuary">Аксессуары</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--nine <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'komplektuyushie')? "category-option--active" : "" ?>" href="/category/komplektuyushie">Комплектующие</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--ten <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'truby-fitingi')? "category-option--active" : "" ?>" href="/category/truby-fitingi">Трубы, фитинги</a>
        </li>
        <li class="left-category__item">
            <a class="category-option category-option--eleven <?= (isset($this->request->params['pass'][0]) && $this->request->params['pass'][0] == 'prochee')? "category-option--active" : "" ?>" href="/cats/prochee">Прочее</a>
        </li>
    </ul>
    <div class="catalog__view">
    <?php if(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='kafel'): ?>
        <form>
       
    
   <div class="up-filter">
        <div class="up-filter__select">
            <div class="select-pad">

                <select name="type">
                    <option selected disabled>
                        Выберите тип продукции
                    </option>
                    <option value="Плитка облицовочная">
                        Плитка облицовочная
                    </option>
                    <option value="плитка напольная">
                        Плитка напольная
                    </option>
                    <option value="Декор">
                       Декор
                    </option>
                    <option value="Фриз">
                       Фриз
                    </option>
                    >
                </select>
            </div>
        </div>
        <div class="up-filter__select">
            <div class="select-pad">
                <select name="size">
                    <option selected disabled>
                        Выберите размер
                    </option>
                    <option value="100x100">
                        100x100
                    </option>
                    <option value="100x400">
                        100x400
                    </option>
                    <option value="200x500">
                        200x500
                    </option>
                    <option value="250x96">
                        250x96
                    </option>
                    <option value="250x450">
                        250x450
                    </option>
                    <option value="250x500">
                        250x500
                    </option>
                    <option value="250x600">
                        250x600
                    </option>
                    <option value="275x400">
                        275x400
                    </option>
                    <option value="295x595">
                        295x595
                    </option>
                    <option value="400x400">
                        400x400
                    </option>
                    <option value="1000x400">
                        1000x400
                    </option>
                    <option value="1000x800">
                        1000x800
                    </option>
                </select>
            </div>
        </div>
        <button class="up-filter__button" type="submit">
            Найти
        </button>
    </div>
    </form>
<?php endif ?>
<?php if(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='sanfayans'): ?>
<div class="up-categories">
    <a class="up-categories__but 
    <?= ((isset($this->request->query['stype']) 
    && $this->request->query['stype']=='unitazy') 
    || (isset($this->request->params['pass'][0]) 
    && $this->request->params['pass'][0]=='sanfayans') 
    && (isset($this->request->query['stype']) && $this->request->query['stype']!='rakoviny'))? "up-categories__but--active" : "" ?>" href="/category/sanfayans?stype=unitazy">Унитазы</a>
    <a class="up-categories__but <?= (isset($this->request->query['stype']) && $this->request->query['stype']=='rakoviny')? "up-categories__but--active" : "" ?>" href="/category/sanfayans?stype=rakoviny">Раковины</a>
</div>
<?php endif; ?> <!-- Санфаянс -->
<?php if(isset($this->request->params['pass'][0]) && $this->request->params['pass'][0]=='polotencesushiteli'): ?>
<div class="up-categories">
    <a class="up-categories__but 
    <?= ((isset($this->request->query['stype']) 
    && $this->request->query['stype']=='vodyanye') 
    || (isset($this->request->params['pass'][0]) 
    && $this->request->params['pass'][0]=='sanfayans') 
    && (isset($this->request->query['stype']) && $this->request->query['stype']!='elektricheskie'))? "up-categories__but--active" : "" ?>" href="/category/sanfayans?stype=vodyanye">Водяные</a>
    <a class="up-categories__but <?= (isset($this->request->query['stype']) && $this->request->query['stype']=='elektricheskie')? "up-categories__but--active" : "" ?>" href="/category/sanfayans?stype=elektricheskie">Электрические</a>
</div>
<?php endif ?>
        <ul class="catalog-list">
        <?php if($filter==2): ?>
            <?php foreach($data['Product'] as $item): ?>
                <?php if(!$item['parent_id']): ?>
                <li class="catalog-list__item">
                    <div class="product-mini">
                        <img class="product-mini__img" src="/img/product/thumbs/<?=$item['img']?>">
                        <div class="mini-info">
                            <div class="bg-line">
                            <span class="mini-info__heading">
<?= $this->Text->truncate(strip_tags($item['title']), 58, array('ellipsis' => '...', 'exact' => true)) ?></span>
                            <span class="mini-info__type"><?=$data['Category']['title']?></span>
                            </div>
                            <?php if($data['Category']['no_body']==0): ?>
                            <p class="mini-info__text">
                                <?= $this->Text->truncate(strip_tags($item['body']), 290, array('ellipsis' => '...', 'exact' => true)) ?>
                            </p>
                            <?php endif ?>
                            <?php if($item['category_id']==9 || $item['category_id']==10 || $item['category_id']==11): ?>
                            <?php else: ?>
                                <a class="more mini-info__more sop4 <?=$item['category_id']?>" href="/product/<?=$item['id']?>">Узнать подробнее о товаре</a>
                        <?php endif ?>
                        </div>
                        <div class="prod-bot">
                                        <div class="prod-bot__left">
                                            <div class="price">12000</div> KZT
                                        </div>
                                        <div class="prod-bot__numbers">
                                            <span class="add add--minus">-</span>
                                            <input type="text" class="kolvo" value="1">
                                            <span class="add add--plus">+</span> 
                                        </div>
                                        <button class="prod-bot__zakas" data-id="<?=$item['id']?>">заказать</button>
                                    </div>  
                    </div>
                </li>
            <?php endif ?>
            <?php endforeach ?>
        <?php else: ?>
            <?php //debug($data); ?>
            <?php foreach($data as $item): ?>

                <li class="catalog-list__item asd">
                    <div class="product-mini">
                        <img class="product-mini__img" src="/img/product/thumbs/<?=$item['Product']['img']?>">
                        <div class="mini-info">
                            <div class="bg-line">
                            <span class="mini-info__heading">
<?= $this->Text->truncate(strip_tags($item['Product']['title']), 58, array('ellipsis' => '...', 'exact' => true)) ?></span>
                            <span class="mini-info__type"><?=$item['Category']['title']?></span>
                            </div>
                            <p class="mini-info__text">
                                <?= $this->Text->truncate(strip_tags($item['Product']['body']), 290, array('ellipsis' => '...', 'exact' => true)) ?>
                            </p>

                            
                            <a class="more mini-info__more sop2" href="/product/<?=$item['Product']['id']?>">Узнать подробнее о товаре</a>
                        </div>  
                    </div>
                </li>
            
            <?php endforeach ?>
        <?php endif ?>
        </ul>

        <!-- <div class="pagination-part">
            <ul class="pagination">
                <li class="pagination__li pagination__li--active">
                    <a href="#">1</a>
                </li>
                <li class="pagination__li">
                    <a href="#">2</a>
                </li>
                <li class="pagination__li">
                    <a href="#">3</a>
                </li>
                <li class="pagination__li">
                    <a href="#">4</a>
                </li>
                <li class="pagination__li">
                    <a href="#">5</a>
                </li>
                <li class="pagination__li">
                    <a href="#">6</a>
                </li>
                <li class="pagination__li">
                    <a href="#">7</a>
                </li>
                <li class="pagination__li">
                    <a href="#">8</a>
                </li>
            </ul>
        </div> -->  
    </div>
</div>
