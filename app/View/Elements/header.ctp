<header class="header">
  <div class="inner header__inner">
    <div class="h-top"> 
      <a class="logo" href="/">
        <img class="logo__img" alt="Логотип" src="/img/logo.png">
        <div class="logo-text">
          <span class="logo-text__heading">Табыс</span>
          <span class="logo-text__des">Салон сантехники</span>
        </div>            
      </a>
      <div class="h-right">
	      <div class="phone-number">
	         <span>+7 (7172) 49-91-99</span>
	         <span>+7 (776) 127-47-05</span>
	         <span>+7 (7172) 59-98-88</span>               
	      </div>
	      <a href="/basket" class="korzina">
        	<span class="korzina__heading">Корзина</span>
        	<span id="korzina_content" class="korzina__text <?= ($this->request->params['controller'] == 'baskets') ? 'korz' : '' ?>">0 товаров</span>
      	  </a>
      </div>            
      <div class="work-time">
        <span>Работаем с 10:00</span>
        <span>до 20:00 без выходных</span>
      </div>
      <div class="search">
        <input class="search__input" type="search" placeholder="Поиск по каталогу">
        <input class="search__submit" type="submit">
      </div>            
      <ul class="social">
        <li class="social__item">               
          <a class="social-link vk" href="#"></a>
        </li>
        <li class="social__item">
          <a class="social-link facebook" href="#"></a>
        </li>
        <li class="social__item">
          <a class="social-link instagram"  href="#"></a>
        </li>
      </ul>
    </div>
    <nav class="menu">
      <ul class="nav">
        <li class="nav__li">
          <a href="/" class="menu-des <?= ($this->request->params['controller']=='pages' && $this->request->params['action']=='home')? "menu-des--active" : "" ?>">
            <span class="menu-des__heading">Главная</span>
            <span class="menu-des__text">
              Главная страница сайта
            </span>
          </a>
        </li>
        <li class="nav__li nav__li--production">
          <a  class="menu-des">
            <span class="menu-des__heading">Продукция</span>
            <span class="menu-des__text">
              Продукция нашей компании
            </span>
          </a>
          <div class="frame">
          <ul class="sub-ul">
            <li>
              <a class="sub-a  category-option--cab" href="/category/dushevye-kabiny">Душевые кабины</a>
            </li>
            <li>
              <a class="sub-a  category-option--forbath" href="/category/mebel-dlya-vannoy-komnaty">Мебель для ванной </a>
            </li>
            <li>
              <a class="sub-a  category-option--sanfoyas" href="/category/sanfayans">Санфаянс</a>
            </li>
            <li>
              <a class="sub-a  category-option--kafel" href="/category/kafel">Кафель</a>
            </li>
            <li>
              <a class="sub-a  category-option--smes" href="/cats/smesiteli">Смесители</a>
            </li>
            <li>
              <a class="sub-a  category-option--bath" href="/category/vanny">Ванны</a>
            </li>
            <li>
              <a class="sub-a  category-option--sushka" href="/category/polotencesushiteli">Полотенцесушители</a>
            </li>
            <li>
              <a class="sub-a  category-option--akses" href="/cats/aksessuary">Аксессуары</a>
            </li>
            <li>
              <a class="sub-a   category-option--nine" href="/category/komplektuyushie">Комплектующие</a>
            </li>
            <li>
              <a class="sub-a category-option--ten" href="/category/truby-fitingi">Трубы, фитинги</a>
            </li>
            <li>
              <a class="sub-a category-option--eleven" href="/cats/prochee">Прочее</a>
            </li>
          </ul>
          </div> 
        </li>
        <li class="nav__li">
          <a href="/page/about" class="menu-des">
            <span class="menu-des__heading">О компании</span>
            <span class="menu-des__text">
              Статья о нашей компании
            </span>
          </a>
        </li>
        <li class="nav__li">
          <a href="/news" class="menu-des">
            <span class="menu-des__heading">Новости и акции</span>
            <span class="menu-des__text">
              Новости и акции нашей компании
            </span>
          </a>
        </li>
        <li class="nav__li">
          <a href="/contacts" class="menu-des">
            <span class="menu-des__heading">Контакты</span>
            <span class="menu-des__text">
              Контакты нашей компании
            </span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>