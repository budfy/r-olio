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

	</script>
	<!-- @@include('components/_footer.html') -->
	<!-- @@include('components/_scripts.html') -->
</body>

</html>