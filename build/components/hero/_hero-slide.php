<?php
function drawSlide($name, $descr, $img, $img_2, $product__id){
	echo
'<article class="hero__slide flex">
	<div class="hero__slide-image flex">
		<div class="hero__image-wrapper --' . $product__id . ' flex">
			<img src="' . $img . '" alt="Масло \'' . $name . '\'. 250мл" class="hero__image-pic">
			<img src="' . $img_2 . '" alt="Масло \'' . $name . '\'. 250мл" class="hero__image-pic --min">
		</div>
	</div>
	<div class="hero__slide-text flex">
		<h3 class="hero__slide-title">Масло “' . $name . '”</h3>
		<p class="hero__slide-descr">'.$descr.'</p>
		<div class="hero__slide-counter counter flex --' . $product__id . '">
			<button type="button" class="counter__btn --minus"><span class="counter__btn-text">-</span></button>
			<input type="number" class="counter__input" value="0" inputmode="numeric">
			<button type="button" class="counter__btn --plus"><span class="counter__btn-text">+</span></button>
		</div>
		<div class="hero__btn-wrap flex">
			<a href="#" class="hero__btn-item main-btn hero__btn --' . $product__id . '">ПОДРОБНЕЕ</a>
			<button class="hero__btn-item main-btn hero__btn js- --' . $product__id . '">В КОРЗИНУ</button>
		</div>
	</div>
</article>';
}
?>