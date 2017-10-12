<div class="catalog-up">
            <ul class="breadcrumbs">
              <li class="breadcrumbs__li">
                <a href="/">Главная</a>
              </li>
              <li class="breadcrumbs__li">Продукция</li>
            </ul>
            <h1 class="up-heading up-heading--content">Продукция</h1>
            <div class="catalog-show">Каталог</div> 
          </div>  
          <div class="catalog">
            <ul class="left-category">
              <li class="left-category__item">
                <a class="category-option category-option--cab" href="/category/dushevye-kabiny">Душевые кабины</a>
              </li>
              <li class="left-category_mini-info_item">
              <a class="category-option category-option--forbath" href="/category/mebel-dlya-vannoy-komnaty">Мебель для ванной <span class="k">комнаты</span></a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--sanfoyas" href="/category/sanfayans">Санфаянс</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--kafel" href="/category/kafel">Кафель</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--smes" href="/category/smesiteli">Смесители</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--bath" href="/category/vanny">Ванны</a>
              </li>
              <li class="left-category__item">
                <a class="category-option  category-option--sushka" href="/category/polotencesushiteli">Полотенцесушители</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--akses" href="/category/aksessuary">Аксессуары</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--nine" href="#">Комплектующие</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--ten" href="#">Трубы, фитинги</a>
              </li>
              <li class="left-category__item">
                <a class="category-option category-option--eleven" href="#">Прочее</a>
              </li>
            </ul>
            <div class="catalog__view">
              <ul class="catalog-list">
                <?php foreach($products as $item): ?>
                <li class="catalog-list__item">
                  <div class="product-mini">
                    <img class="product-mini__img" src="/img/product/thumbs/<?=$item['Product']['img']?>">
                    <div class="mini-info">
                      <div class="bg-line">
                        <span class="mini-info__heading"><?=$item['Product']['title']?></span>
                        <span class="mini-info__type"><?=$item['Category']['title']?></span>
                      </div>
                      <p class="mini-info__text">
                       <?= $this->Text->truncate(strip_tags($item['Product']['body']), 304, array('ellipsis' => '...', 'exact' => true)) ?>
                      </p>
                      <a class="more mini-info__more" href="product.html">Узнать подробнее о товаре</a>
                    </div>  
                  </div>
                </li>
                <?php endforeach ?>
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