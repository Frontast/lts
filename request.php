<div class="request">
	<div class="air">
		<div class="container noflex-cont">
			<div class="request__title">Запрос на услуги</div>
			<!-- /.request__title -->
			<form onsubmit="yaCounter50847179.reachGoal('btnForm'); return true;" action="mailer/smart.php" method="POST" class="request-form">
				<div class="request-form__input">
					<div class="icon-geo">
						<!-- <img src="img/request/geo-icon.png" alt="geo-icon"> -->
						<input class="input-pad" name="from-where" type="text" placeholder="Откуда" required>
					</div>
					<div class="icon-geo">
						<!-- <img src="img/request/geo-icon.png" alt="geo-icon"> -->
						<input class="input-pad" name="where" type="text" placeholder="Куда" required>
					</div>
				</div>
				<div class="request-form__input">
					<input class="input-second" name="name-user" type="text" placeholder="Как Вас зовут?" required>
					<input class="input-second input-tel" name="phone-user" type="tel" placeholder="Номер телефона" required>
				</div>
				<div class="request-form__button"><button type="submit" class="button">Получить расчет</button></div>
				<!-- /.request-form__button -->
			</form>
			<!-- /.request-form -->
			<div class="request-text_small">Нажав кнопку «Получить расчет», я даю согласие на обработку моих персональных данных.</div>
			<!-- /.request-text_small -->
		</div>
		<!-- /.container -->
	</div>
</div>
<!-- /.request -->