<!DOCTYPE html>
<html lang="en">
<?php include 'components/_head.php' ?>
<!-- @@include('components/_head.html') -->

<body>
	<?php include 'components/_header.php' ?>
	<!-- @@include('components/_header.html') -->
	<!-- WRITE CODE HERE -->
	<main>
		<form action="" method="POST" name="form" class="js-form">
			<!-- <label for="name-input">
				<input type="text" name="Имя" id="name" required>
			</label>
			<label for="phone">
				<input type="tel" name="Телефон" id="phone">
			</label>
			<label for="email">
				<input type="email" name="Почта" id="email">
			</label>
			<label for="city">
				<select name="Город" id="city">
					<option value="Днепр">Днепр</option>
					<option value="Кривой Рог">Кривой Рог</option>
					<option value="Каменское">Каменское</option>
					<option value="Новомосковск">Новомосковск</option>
					<option value="Павлоград">Павлоград</option>
					<option value="Верхнеднепровск">Верхнеднепровс</option>
					<option value="Синельниково">Синельниково</option>
					<option value="Пятихатки">Пятихатки</option>
					<option value="Жёлтые Воды">Жёлтые Воды</option>
				</select>
			</label>
			<label for="personal-data">
				<input type="checkbox" name="Согласие на обработку персональных данных" id="personal-data">
				<span>Я даю своё согласие на обработку персональных данных </span>
			</label> -->
			<button type="submit" name="send" id="send">
				Отправить форму
			</button>
		</form>
	</main>
	<!-- STOP WRITE CODE -->
	<?php include 'components/_footer.php';
	include 'components/_scripts.php'
	?>
	<script>
	const TOKEN = "1386302647:AAElpF51SaibAbVnpjfVWPqQFv53dwgFC9M";
	const CHAT_ID = "-1001211587878";

	let form = document.querySelector('.js-form'); // находим в DOM нашу лид-форму
	form.addEventListener("submit", function(e) { // прослушиваем форму
		e.preventDefault(); // перехватываем стандартный ответ
		data = function() {
			let msg = "";
			for (const [key, val] of Object.entries(oil.oilMeet)) {
				msg += `<b>${key}: </b><i>${val}</i>\n`
			}
			console.log(`message is: ${msg}`);
			return msg
		}
		sendMsg(data()); // передаём данные из формы на отправку
	})

	function sendMsg(data) {
		let url = 'https://api.telegram.org/bot' + TOKEN + '/sendMessage'; // токен бота
		let body = JSON.stringify({ // склеиваем объект в JSON строку
			chat_id: CHAT_ID,
			parse_mode: 'html', // разметка сообщений вкл (чтобы использовать *жирный текст*)
			text: `<u><i><b>Новый лид:</b></i></u>\n${data}`
		});
		let xhr = new XMLHttpRequest(); // инициализируем AJAX запрос
		xhr.open('POST', url, true); // отправляем наше сообщение методом POST на сервак телеги
		xhr.setRequestHeader('Content-type',
			'application/json; charset=utf-8'); // на всякий случай, оповестим телеграм, что отправили JSON
		xhr.send(body);
	}
	</script>
	<!-- @@include('components/_footer.html') -->
	<!-- @@include('components/_scripts.html') -->
</body>

</html>