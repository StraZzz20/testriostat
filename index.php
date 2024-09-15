<!DOCTYPE html>
<html lang="ru">
<head>
	<?php
		$website_title = 'Riostat';
		require 'blocks/head.php';
    ?>
</head>

<body>

<div class="formContainer">
	<div class="form">

		<div class="formlabelContainer"><label for="name" class="formLabel">Имя</label></div>	
		<input type="text" name="name" id="name" class="formInput">

		<div class="formlabelContainer"><label for="email" class="formLabel">E-mail</label></div>	
		<input type="email" name="email" id="email" class="formInput">

		<div class="formlabelContainer"><label for="phone" class="formLabel">Телефон</label></div>	
		<input type="tel" name="phone" id="phone" class="formInput">

		<div class="formlabelContainer"><label for="price" class="formLabel">Цена</label></div>	
		<input type="price" name="price" id="price" class="formInput">
		<div class="errorBlock" id="errorBlock"></div>
		<div class="submitButton">
			<button id="apply_user">Подать заявку</button>

		</div>
	</div>
</div>

<?php

// подключение к amoCRM API
$subdomain = 'http://localhost:8080';
$username = 'stas030504';
$hash = 'f300379e-28c3-4989-b3cc-006626dcf79a';

$url = "https://$test.amocrm.ru/api/v4/leads";

$ch = curl_init(url: $url);
curl_setopt(handle: $ch, option: CURLOPT_RETURNTRANSFER, value: true);
curl_setopt(handle: $ch, option: CURLOPT_HTTPHEADER, value: false[
	'Authorization: Bearer ' . $hash.
	'Content-Type: application/json'.
]);
$response = curl_exec(handle: $ch);
curl_close(handle: $ch);

echo $response;
?>
</body>
</html>