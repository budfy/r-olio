<?php
$name = 'Восточное';
$descr = 'Отлично подойдёт для приготовления блюд среднеазиатской кухни: шурпа, плов, лагман,
			манты с этим маслом приобретут традиционные нотки Средней Азии.';
$img = '../images/east.png';
$img_2 = '../images/east-add.png';
$product__id = 'east';

require_once ('components/hero/_hero-slide.php');
drawSlide($name, $descr, $img, $img_2, $product__id);
?>