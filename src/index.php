<!DOCTYPE html>
<html lang="en">
<?php include 'components/_head.php' ?>
<!-- @@include('components/_head.html') -->

<body>
	<?php include 'components/_header.php' ?>
	<!-- @@include('components/_header.html') -->
	<!-- WRITE CODE HERE -->
	<main>
		<button class="item__btn item__remove-btn" type="button" data-product="oilSalat" id="oilSalatMinus">-</button>
		<button class="item__btn item__add-btn" type="button" data-product="oilSalat" id="oilSalatPlus">+</button>
		<div class="grid-wrapper --js-insert-here">

		</div>
	</main>
	<!-- STOP WRITE CODE -->
	<?php include 'components/_footer.php';
	include 'components/_scripts.php'
	?>
	<!-- @@include('components/_footer.html') -->
	<!-- @@include('components/_scripts.html') -->
</body>

</html>