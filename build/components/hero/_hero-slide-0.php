<?php
$name = 'Для салата';
$descr = 'Название говорит само за себя. Это идеальная заправка, которая даже скучной и
			привычной капусте придаст неповторимый вкус и аромат.';
$img = '../images/salat.png';
$img_2 = '../images/salat-add.png';
$product__id = 'salat';

require_once ('components/hero/_hero-slide.php');
drawSlide($name, $descr, $img, $img_2, $product__id);
?>