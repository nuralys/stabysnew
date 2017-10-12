<ul class="breadcrumbs">
    <li class="breadcrumbs__li">
        <a href="/">Главная</a>
    </li>
    <li class="breadcrumbs__li">
            <a href="/news">Новости и Акции</a>
        </li>
         
    <li class="breadcrumbs__li"><?=$data['News']['title']?></li>
</ul>
<h1 class="up-heading up-heading--content"><?=$data['News']['title']?></h1>
<div class="content">
    <img class="content__img" alt="<?=$data['News']['title']?>" src="/img/news/<?=$data['News']['img']?>">
    <?=$data['News']['body']?>
</div>