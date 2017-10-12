<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?=$title_for_layout?> - Салон сантехники Табыс</title>
        <meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
        <?php if(isset($meta['keywords'])): ?>
            <meta name="keywords" content="<?=$meta['keywords']?>">
        <?php endif; ?>
        <?php if(isset($meta['description'])): ?>
            <meta name="description" content="<?=$meta['description']?>">
        <?php endif; ?>
        <link href="/css/style.css?v=5" rel="stylesheet" type="text/css">
        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <div class="top">
            <?=$this->element('header') ?>
            <div class="category-lines">
                <div class="inner">
                    <ul class="cat-ul">
                        <li>
                            <a class="cat-m" href="/category/dushevye-kabiny">
                                <span class="cat-m__img"></span>
                                <span class="cat-m__heading">Душевые кабины</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/mebel-dlya-vannoy-komnaty">
                                <span class="cat-m__img cat-m__img--mvanna"></span>
                                <span class="cat-m__heading">Мебель для ванной</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/cats/smesiteli">
                                <span class="cat-m__img cat-m__img--smestiteli"></span>
                                <span class="cat-m__heading">Смесители</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/vanny">
                                <span class="cat-m__img cat-m__img--vanna"></span>
                                <span class="cat-m__heading">Ванны</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/kafel">
                                <span class="cat-m__img cat-m__img--kafell"></span>
                                <span class="cat-m__heading">Кафель</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/sanfayans">
                                <span class="cat-m__img cat-m__img--sanfayas"></span>
                                <span class="cat-m__heading">Санфаянс</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/polotencesushiteli">
                                <span class="cat-m__img cat-m__img--psushiteli"></span>
                                <span class="cat-m__heading">Полотенцесушители</span>
                            </a>
                        </li>
                        <li>
                            <a class="cat-m" href="/category/aksessuary">
                                <span class="cat-m__img cat-m__img--accsessory"></span>
                                <span class="cat-m__heading">Аксессуары</span>
                            </a>
                        </li>                                                                                                                                               
                    </ul>
                </div>
            </div>
            <div class="inner ov main-part">
                <div class="slider">
                    <div>
                        <div class="slider-info">
                            <span class="slider-info__heading">Скидки на смесители</span>
                            <span class="skidka">10%</span>
                            <img src="/img/slider-smestitel.png">
                        </div>
                    </div>
                    <div>
                        <div class="slider-info">
                            <span class="slider-info__heading">Скидки на смесители</span>
                            <span class="skidka">10%</span>
                            <img src="/img/slider-smestitel.png">
                        </div>
                    </div>
                    <div>
                        <div class="slider-info">
                            <span class="slider-info__heading">Скидки на смесители</span>
                            <span class="skidka">10%</span>
                            <img src="/img/slider-smestitel.png">
                        </div>
                    </div>                                                      
                </div>
                <div class="right-part">
                    <div class="hit-part">
                        <img src="img/hit.jpg">
                    </div>
                    <div class="hit-part">
                        <img src="/img/hit2.jpg">
                    </div>                  
                </div>
            </div>
      </div>
      <div class="benefits">
        <div class="inner">
            <ul class="ben-ul">
                <li class="ben-ul__li">                      
                  <div class="ben-des ben-des--quality">
                    <span class="ben-des__heading">Качество</span>
                    <p class="ben-des__text">Более 10 лет работы на рынке,
                        наши специалисты бла-бла-бла,
                        ну в общем рыба-текст...
                        </p>    
                  </div>
                </li>
                <li class="ben-ul__li">                      
                  <div class="ben-des ben-des--qarrancy">
                    <span class="ben-des__heading">Гарантия</span>
                    <p class="ben-des__text">Более 10 лет работы на рынке,
                        наши специалисты бла-бла-бла,
                        ну в общем рыба-текст...
                        </p>    
                  </div>
                </li>
                <li class="ben-ul__li">                      
                  <div class="ben-des ben-des--delivery">
                    <span class="ben-des__heading">Доставка</span>
                    <p class="ben-des__text">Более 10 лет работы на рынке,
                        наши специалисты бла-бла-бла,
                        ну в общем рыба-текст...
                        </p>    
                  </div>
                </li>
            </ul>
        </div>
      </div>
      <div class="inner">       
          <div class="news-up">
            <span class="up-heading news-up__heading">
                Новости и акции
            </span>
            <a class="more news-up__more" href="/news">
                Поcмотреть все
            </a>
          </div>
          <ul class="news-main">
          <?php foreach($news as $item): ?>
            <li class="news-main__li">
                <div class="news-mini">                 
                    <a class="news-mini__img" href="/news/<?=$item['News']['id']?>">
                        <img alt="<?=$item['News']['title']?>" src="/img/news/thumbs/<?=$item['News']['img']?>">
                    </a>    
                    <div class="news-des">
                        <a class="news-des__heading" href="/news/<?=$item['News']['id']?>"><?= $this->Text->truncate(strip_tags($item['News']['title']), 38, array('ellipsis' => '...', 'exact' => true)) ?></a>
                        <p class="news-des__text">
                            <?= $this->Text->truncate(strip_tags($item['News']['body']), 287, array('ellipsis' => '...', 'exact' => true)) ?> 
                        </p>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
          </ul>
          <div class="our-clients">
            <span class="up-heading our-clients__heading">
                Наши клиенты
            </span>
            <div class="client-carousel">
                <div class="client-carousel__item">
                    <img alt="Клиент" src="img/client.png">
                </div>
                <div class="client-carousel__item">
                    <img alt="Клиент" src="img/client.png">
                </div>
                <div class="client-carousel__item">
                    <img alt="Клиент" src="img/client.png">
                </div>
                <div class="client-carousel__item">
                    <img alt="Клиент" src="img/client.png">
                </div>
            </div>
          </div>
      </div>
      <footer class="footer">
            <div class="footer-top">
                <div class="inner footer-top__inner">
                    <div class="footer-left">
                        <ul class="footer-social">
                            <li class="footer-social__item">
                                <a class="social-link vk" href="#"></a>
                            </li>
                            <li class="footer-social__item">
                                <a class="social-link facebook" href="#"></a>
                            </li>
                            <li class="footer-social__item">
                                <a class="social-link instagram"  href="#"></a>
                            </li>
                        </ul>
                        <div class="footer-form">
                            <input class="footer-form__input" type="text" placeholder="Имя">
                            <input class="footer-form__input" type="text" placeholder="E-mail">
                            <textarea class="footer-form__input footer-form__textarea" placeholder="Сообщение"></textarea>
                            <button class="more footer-form__submit" type="submit">Отправить заявку</button>
                        </div>
                        <div class="footer-cont">
                            <span class="footer-cont__heading">
                                Контакты
                            </span>
                            <ul class="footer-ul">
                                <li class="footer-ul__li footer-ul__li--adress">
                                    Астана, ул. Абая, 94
                                </li>
                                <li class="footer-ul__li">
                                    +7 (701) 206-82-84
                                </li>
                                <li class="footer-ul__li">
                                    +7 (7172) 59-98-88
                                </li>
                                <li class="footer-ul__li">
                                    +7 (7172) 49-91-99
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=l6LJx7KHMN-vvXgeyLRJKXCg4yEo2hXj&amp;width=600&amp;height=305&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="inner fbot-des">
                    <span class="fbot-des__copyright">
                        s-tabys.kz.kz © 2016, все права защищены
                    </span>
                    <a class="created" target="_blank" href="http://astanacreative.kz">
                        Разработано в <span class="created__span">Астанакреатив</span>
                    </a>
                </div>
            </div>          
        </footer>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
    </body>
</html>