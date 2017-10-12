<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title><?=$title_for_layout?> - Салон сантехники Табыс</title>
		<?php if(isset($meta['keywords'])): ?>
			<meta name="keywords" content="<?=$meta['keywords']?>">			
		<?php endif; ?>
		<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1">
		<?php if(isset($meta['description'])): ?>
			<meta name="description" content="<?=$meta['description']?>">
		<?php endif; ?>
		<link href="/css/style.css" rel="stylesheet" type="text/css">
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
		<?php echo $this->Session->flash('good'); ?>
	    <?php echo $this->Session->flash('bad'); ?>
		<div class="top">
			<?=$this->element('header') ?>
			<div class="inner">				
				<?php echo $this->fetch('content'); ?>
			</div>	
		</div>
	  <div class="benefits">
				<div class="inner">
					<ul class="ben-ul">
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--quality">
						  	<span class="ben-des__heading">Качество</span>
						  	<!-- <p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p> -->	
						  </div>
						</li>
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--qarrancy">
						  	<span class="ben-des__heading">Гарантия</span>
						  	<!-- <p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p> -->	
						  </div>
						</li>
						<li class="ben-ul__li">						 
						  <div class="ben-des ben-des--delivery">
						  	<span class="ben-des__heading">Доставка</span>
						  	<!-- <p class="ben-des__text">Более 10 лет работы на рынке,
								наши специалисты бла-бла-бла,
								ну в общем рыба-текст...
								</p> -->	
						  </div>
						</li>
					</ul>
				</div>
				<div class="korzina-bot">
                <div class="inner">
                    <div class="korzina-pop">
                        <div class="kpop-info">
                            <span class="kpop-info__heading">добавлено в корзину</span>
                            <p class="kpop-info__text">0 товаров</p>
                        </div>
                        <a class="korzina-pop__right" href="/basket">Оформить заказ</a>
                    </div>
                </div>
            </div>  
		</div>
	  <div class="inner">				  
		  <div class="our-clients">
		  	<span class="up-heading our-clients__heading">
		  		Наши партнеры
		  	</span>
		  	<div class="client-carousel">
                <?php foreach($clients as $item): ?>
                <div class="client-carousel__item">
                    <img alt="Клиент" src="/img/client/<?=$item['Client']['img']?>">
                </div>
                <?php endforeach ?>
            </div>
		  </div>
	  </div>
	<?=$this->element('footer')?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/slick.min.js"></script>
	</body>
</html>