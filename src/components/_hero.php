<section class='hero'>
	<div class='container'>
		<div class='hero__inner'>
			<div class="hero__top">
				<h2 class="hero__title">Наши продукты</h2>
				<div class="hero__pagination">
					<button type="button" class="hero__pagination-link js-slideTo-link" data-slide="0">Для
						салата</button>
					<button type="button" class="hero__pagination-link js-slideTo-link"
							data-slide="1">Итальянское</button>
					<button type="button" class="hero__pagination-link js-slideTo-link" data-slide="2">Для мяса</button>
					<button type="button" class="hero__pagination-link js-slideTo-link"
							data-slide="3">Восточное</button>
				</div>
			</div>
			<div class="swiper-container js-hero-swiper hero__slider">
				<div class="swiper-button-prev"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<?php include 'components/hero/_hero-slide-0.php' ?>
					</div>
					<div class="swiper-slide">
						<?php include 'components/hero/_hero-slide-1.php' ?>
					</div>
					<div class="swiper-slide">
						<?php include 'components/hero/_hero-slide-2.php' ?>
					</div>
					<div class="swiper-slide">
						<?php include 'components/hero/_hero-slide-3.php' ?>
					</div>
				</div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>