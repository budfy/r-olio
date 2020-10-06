	<?php

if (isset($_POST['send'])) {
	$name = $_POST['Имя'];

	$token = "1386302647:AAElpF51SaibAbVnpjfVWPqQFv53dwgFC9M";
	$chat_id = "-1001211587878";
	$site = "R-olio";

	// $arr = array(
	// 	'Уведомление с сайта: ' => $site,
	// 	'Имя: ' => $name
	// );

	foreach ($_POST as $key => $value) {
		$txt .= "<b>".$key.": </b> ".$value."%0A";
	}

	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

	if ($sendToTelegram) {
  		// header('Location: form-test.html');
	} else {
  		echo "Error";
	}
	}
?>