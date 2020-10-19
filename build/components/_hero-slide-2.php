<?php
$name = 'Для мяса';
$descr = 'Добавит ноток Италии в любое ваше блюдо. Паста, ризотто, пицца, салаты - его везде
			можно использовать.';
$img = '../images/meet.png';
$img_2 = '../images/meet-add.png';
$product__id = 'meet';

require_once ('components/_hero-slide.php');
drawSlide($name, $descr, $img, $img_2, $product__id);
?>