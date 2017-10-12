<div class="catalog-up">
    <ul class="breadcrumbs">
        <li class="breadcrumbs__li">
            <a href="/">Главная</a>
        </li>
        <li class="breadcrumbs__li">
            Новости и Акции
        </li>                           
    </ul>
    <h1 class="up-heading up-heading--content">Новости и акции</h1>
</div>
<ul class="news-ul">
<?php foreach($data as $item): ?>
    <li class="news-ul__li">
        <a class="news-img" href="/news/<?=$item['News']['id']?>">
         <img src="/img/news/thumbs/<?=$item['News']['img']?>" alt="<?=$item['News']['title']?>">
      </a>
      <div class="news-text">
        <a class="news-text__heading" href="/news/<?=$item['News']['id']?>"><?php echo $item['News']['title']; ?></a>
        <p class="news-text__p">
            <?= $this->Text->truncate(strip_tags($item['News']['body']), 560, array('ellipsis' => '...', 'exact' => true)) ?>
        </p>
        <a class="news-text__etc" href="/news/<?=$item['News']['id']?>">Узнать подробнее</a>
      </div>
    </li>
    <?php endforeach ?>
</ul> 