<?php
$name = 'Итальянское';
$descr = 'Идеальное решение для легкого и быстрого маринада мяса, можно добавить капельку
			масла и после приготовления.';
$img = '../images/italian.png';
$img_2 = '../images/italian-add.png';
$product__id = 'italian';

require_once ('components/hero/_hero-slide.php');
drawSlide($name, $descr, $img, $img_2, $product__id);
?>