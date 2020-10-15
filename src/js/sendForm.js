	const TOKEN = "1386302647:AAElpF51SaibAbVnpjfVWPqQFv53dwgFC9M";
	const CHAT_ID = "-1001211587878";

	let form = document.querySelector('.js-form'); // находим в DOM нашу лид-форму
	form.addEventListener("submit", function (e) { // прослушиваем форму
		e.preventDefault(); // перехватываем стандартный ответ
		data = function () {
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