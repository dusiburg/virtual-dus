<?php

if(time() <= 1599339600) header('Location: http://wtc_tragedy.ru/?error=2');

?>

<!DOCTYPE html>
<html>
	<head>
		<title>WTC Tragedy</title>
		<link rel="stylesheet" href="/css/index.css">
		<link rel="stylesheet" href="/css/game.css">
		<link rel="shortcut icon" href="/images/favicon.ico?v=1">
		<meta charset="UTF-8"/>
	</head>
	<body>
		
		<div id="preloader" class="preloader">
			<div class="loading">
				<img src="/images/logo.png"/>
				<p class="text_loading" id="text_loading">Загрузка...</p>
				<div id="button_loading" class="button_loading">
					<div class="button_game" onclick="HidePreLoader()">Начать</div>
					<audio id="welcome">
						<source src="/sounds/welcome.wav" type="audio/wav">
						<source src="/sounds/welcome.ogg" type="audio/ogg; codecs=vorbis">
						<source src="/sounds/welcome.mp3" type="audio/mpeg">
					</audio>
				</div>
			</div>
		</div>
		<script src="/js/preloader.js"></script>
		
		<div class="top">
			city DUSIBURG, %players%, %date%, %time%
		</div>
		<div class="sky_game"></div>
		<div class="image_city_game">
			<p class="city_game"><img src="/images/game/city.jpg"/></p>
		</div>
		<div class="earth_under_game"></div>
		<div class="information">Welcome to Dusiburg</div>
		<div class="bottom_panel">
			<div class="b_image">
				<img src="/images/avatars/standard.png" width="100px;" height="100px;">
			</div>
			<p class="name_game">%player_name%</p>
			<p class="mini_description_person">%work%</p>
			<p class="money_game">$10000</p>
			<div class="static_game">
				<p class="hunger_text">Голод:</p><div class="hunger"></div><div class="hunger_free"></div>
				<p class="water_text">Жажда:</p><div class="water"></div><div class="water_free"></div>
				<p class="alcohol_text">Трезвость:</p><div class="alcohol"></div><div class="alcohol_free"></div>
				<p class="bath_text">Чистота:</p><div class="bath"></div><div class="bath_free"></div>
				<p class="toilet_text">Нужда:</p><div class="toilet"></div><div class="toilet_free"></div>
				<p class="sleep_text">Усталость:</p><div class="sleep"></div><div class="sleep_free"></div>
				<div class="button_game" style="position: absolute; top: 10px; right: 190px;">Открыть карту</div>
				<div class="button_game" style="position: absolute; top: 80px; right: 190px;">Настройки</div>
				<div class="button_game" style="position: absolute; top: 10px; right: 10px;">Телефон</div>
				<div class="button_game" style="position: absolute; top: 80px; right: 10px;">Выйти</div>
			</div>
			<div class='chat'>
	<div class='chat-messages'>
		<div class='chat-messages__content' id='messages'>
			Загрузка...
		</div>
	</div>
	<div class='chat-input'>
		<form method='post' id='chat-form'>
			<input type='text' id='message-text' class='chat-form__input' placeholder='Введите сообщение'> <input type='submit' class='chat-form__submit' value='=>'>
		</form>
	</div>
</div>
			<div class="image_location">
				<p class="name_location">Duspean Bank Tower</p>
				<img src="/images/locations/WTC_street.jpg" width="100%" height="100%">
			</div>
		</div>
	</body>
</html>