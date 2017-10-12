<div class="catalog-up">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__li">
            <a href="/">Главная</a>
        </li>
        <li class="breadcrumbs__li">Корзина</li>
        
    </ul>
    <h1 class="up-heading up-heading--content">Корзина</h1>
    
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

<div class="korzina-part">
	<div id="korzFull">
		<span class="emty-korz">В корзине пусто</span>
	</div>
	<form action="/baskets/send" method="POST" id="basketform">
	<textarea style="display:none;" id="senddata" name="data[Basket][senddata]"></textarea>
		<span class="korzina-part__heading">Способ доставки</span>
		<ul class="radio-ul">
			<li class="radio-li">
				<input name="delivery" id="del-type-1" class="radio-li__radio" type="radio">
				<label for="del-type-1" class="radio-li__heading">Самовывоз</label>
				<p>Товар вы можете получить по прибытию в наш магазин г. Астана пр. Абая 94</p>
			</li>
			<li class="radio-li">
				<input name="delivery" id="del-type-2" class="radio-li__radio" type="radio">
				<label for="del-type-2" class="radio-li__heading">Курьер</label>
				<p>Стоимость доставки по городу Астана 1000тг. При заказе на сумму от 100000 тенге – доставка в черте города бесплатная. Данные тарифы действительны только для объёма не привышающего (Газель) 1,5 тонн.</p>
			</li>						
		</ul>
		<span class="korzina-part__heading">Заполните данные</span>
		<div class="zakas-line">
			<div class="zakas-row">
				<label class="zakas-row__label">Имя:</label>
				<input class="zakas-row__input" placeholder="Имя" type="text" name="data[Basket][name]">
			</div>
			<div class="zakas-row">
				<label class="zakas-row__label">Фамилия:</label>
				<input class="zakas-row__input" placeholder="Фамилия" type="text">
			</div>
		</div>	
		<div class="zakas-line">
			<div class="zakas-row">
				<label class="zakas-row__label">Контактный телефон:</label>
				<input class="zakas-row__input" placeholder="онтактный телефон" type="text">
			</div>
			<div class="zakas-row">
				<label class="zakas-row__label">Почта:</label>
				<input class="zakas-row__input" placeholder="Почта" type="text">
			</div>
		</div>
		<div class="zakas-line">
			<div class="zakas-row">
				<label class="zakas-row__label">Населенный пункт:</label>
				<input class="zakas-row__input" placeholder="Населенный пункт" type="text">
			</div>
			<div class="zakas-row">
				<label class="zakas-row__label">Адрес доставки:</label>
				<input class="zakas-row__input" placeholder="Адрес доставки" type="text">
			</div>
		</div>
		<div class="zakas-line">
			<div class="zakas-row">
				<label class="zakas-row__label">Комментарий к заказу:</label>
				<textarea class="zakas-textarea" placeholder="Ваш комментарий к заказу"></textarea>
			</div>
		</div>
		<button class="zakas-submit" type="submit" id="sendbutton">Отправить</button>	
	</form>
</div>


    </div>
</div>
