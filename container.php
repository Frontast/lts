<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/palatino.css">
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	<!-- <link rel="stylesheet" href="css/reset.css"> -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/page.css">
	<title>Импортно-экспортная компания LTS</title>
</head>
	<body>
		<?php include('header.php'); ?>
		<button class="burger-menu"><img src="img/burger-menu.png" alt="menu"></button>
		<div class="page">
		<div class="container">
			<div class="aside-menu">
				<div class="aside-menu__title">Наши услуги</div>
				<div class="aside-menu-blocks">
					<a href="inter-shipping.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/inter-shipping.png" alt="inter-shipping"></div>
							<div class="aside-menu-block__text">Международные грузоперевозки</div>
						</div>
					</a>
					<a href="china.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/china.png" alt="china"></div>
							<div class="aside-menu-block__text">Доставка грузов из Китая</div>
						</div>
					</a>
					<a href="custom-house.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/custom-house.png" alt="custom-house"></div>
							<div class="aside-menu-block__text">Таможенное оформление</div>
						</div>
					</a>
					<a href="container.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/container.png" alt="container"></div>
							<div class="aside-menu-block__text">Контейнерные перевозки</div>
						</div>
					</a>
					<a href="group-cargo.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/group-cargo.png" alt="group-cargo"></div>
							<div class="aside-menu-block__text">Доставка сборных грузов</div>
						</div>
					</a>
					<a href="financing.php">
						<div class="aside-menu-block">
							<div class="aside-menu-block__img"><img src="img/services/financing.png" alt="financing"></div>
							<div class="aside-menu-block__text">Финансирование поставок</div>
						</div>
					</a>
				</div>
			</div>
			<div class="content">
				<div class="content-descr">
					<div class="content-descr__title">контейнерные перевозки</div>
					<div class="content-descr__text">Контейнер — это стандартный закрытый грузовой модуль, который можно использовать множество раз (оборотная тара). Контейнеры применяют для перевозки грузов в интермодальных или мультимодальных (смешанных) перевозках. Практически все международные перевозки являются мультимодальными (то есть в них участвуют несколько видов транспорта). Интермодальные перевозки отличаются тем, что перевозчик обеспечивает транспортировку не самостоятельно, а с привлечением подрядных компаний.</div>
				</div>
				<div class="content-gallery">
					<div class="content-gallery__title">Галерея изображений</div>
					<div class="content-gallery__img">
						<img src="img/page/gallery-img7.jpg" alt="gallery-img7">
						<img src="img/page/gallery-img8.jpg" alt="gallery-img8">
					</div>
				</div>
				<div class="reviews">
					<div class="reviews__title">Отзывы</div>
					<div class="reviews-item">
						<div class="reviews-item__title">Ольга Петрова</div>
						<div class="reviews-item__text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</div>
					</div>
					<div class="reviews-item">
						<div class="reviews-item__title">Ольга Петрова</div>
						<div class="reviews-item__text">Спасибо вашей компании за сотрудничество, постоянно доказываете, что с вами очень приятно работать, хорошая скорость и все товары всегда в сохранности. Всем советую.</div>
					</div>
				</div>
				<div class="reviews-form">
					<div class="reviews-form__title">Оставить отзыв</div>
					<form action="mailer/smart.php" method="POST">
						<input type="text" name="name-user" class="reviews-form__input" placeholder="Как вас зовут?">
						<input type="text" name="mail-user" class="reviews-form__input" placeholder="Ваш e-mail">
						<input type="text" name="review-user" class="reviews-form__input big-input" placeholder="Ваш отзыв">
						<button type="submit" class="button">Отправить</button>
					</form>
				</div>
				<div class="content-table">
					<div class="content-table__title">Таблица</div>
					<table>
						<tr>
							<td class="main-row">Фамилия</td>
							<td class="main-row">Имя</td>
							<td class="main-row">Отчество</td>
							<td class="main-row">Телефон</td>
							<td class="main-row">Адрес</td>
							<td class="main-row">Семейное положение</td>
							<td class="main-row">Код подразделения</td>
						</tr>
						<tr>
							<td class="secondary-row">Фамилия</td>
							<td class="secondary-row">Имя</td>
							<td class="secondary-row">Отчество</td>
							<td class="secondary-row">Телефон</td>
							<td class="secondary-row">Адрес</td>
							<td class="secondary-row">Семейное положение</td>
							<td class="secondary-row">Код подразделения</td>
						</tr>
						<tr>
							<td class="secondary-row">Фамилия</td>
							<td class="secondary-row">Имя</td>
							<td class="secondary-row">Отчество</td>
							<td class="secondary-row">Телефон</td>
							<td class="secondary-row">Адрес</td>
							<td class="secondary-row">Семейное положение</td>
							<td class="secondary-row">Код подразделения</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<?php include ('request.php'); ?>
	<?php include ('footer.php'); ?>
	<?php include ('index-modal.php'); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script>
			jQuery(function($){
   	$(".input-tel").mask("+7 (999) 999-99-99");
			});
			jQuery(function($){
   	$(".input-tel").mask("+7 (999) 999-99-99");
			});
		</script>
		<script>
			$(document).ready(function(){

				$('.burger-menu').on("click", function(){
					$('.menu-mobail').show();
				})
				$('.close').on("click", function(){
					$('.menu-mobail').hide();
				})
				$('.menu-mobail__item').on("click", function(){
					$('.menu-mobail').hide();
				})

			});
		</script>
		<script>
		$(document).ready(function(){

				$('.header-button').on("click", function(){
					$('.index-modal').show();
				})
				$('.popup__close').on("click", function(){
					$('.index-modal').hide();
				})

			});
	</script>
	<script>
		$('form').submit(function(event) {
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: "mailer/smart.php",
				data: $(this).serialize()
			}).done(function() {
				$(this).find("input").val("");
				$("form").trigger("reset");
			});
			return false;
		});
	</script>
	</body>
</html>