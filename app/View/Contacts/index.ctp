<div class="catalog-up">
	<ul class="breadcrumbs">
		<li class="breadcrumbs__li">
			<a href="#">Главная</a>
		</li>
		<li class="breadcrumbs__li">
			Контакты
		</li>							
	</ul>
	<h1 class="up-heading up-heading--content">Контакты</h1>
</div>
<div class="contact">						
	<div class="contact__form">
		<ul class="contact-ul">
			<li class="contact-ul__li contact-ul__li--adress">
				<?=$data['Contact']['address'] ?>
			</li>
			<li class="contact-ul__li contact-ul__li--number">
				 <?=$data['Contact']['phone'] ?>
			</li>
				<li class="contact-ul__li contact-ul__li--number">
				<?=$data['Contact']['mobile'] ?>
			</li>
			<li class="contact-ul__li contact-ul__li--envelope">
				<?=$data['Contact']['email'] ?>
			</li>
	 </ul>
		<ul class="footer-social">
			<li class="footer-social__item">
				<a class="social-link vk" href="#"></a>
			</li>
			<li class="footer-social__item">
				<a class="social-link facebook" href="#"></a>
			</li>
			<li class="footer-social__item">
				<a class="social-link instagram" href="#"></a>
			</li>
		</ul>
		<div class="form">
			<form action="/feedbacks/add" method="post" accept-charset="utf-8">
				<input class="form__input" name="data[Feedback][title]" required="required" type="text" placeholder="Имя">
				<input class="form__input" name="data[Feedback][email]" required="required" type="text" placeholder="E-mail">
				<textarea name="data[Feedback][body]" class="form__input form__textarea" placeholder="Сообщение"></textarea>
				<button class="more form__more" type="submit">Отправить заявку</button>
			</form>
		</div>
	</div>
	<div class="contact__map">
		<div class="map-part">
			<?=$data['Contact']['maps'] ?>
		</div>
	</div>
</div>