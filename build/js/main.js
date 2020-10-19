let oil;

function round(selector) {
	let elArr = document.querySelectorAll(selector);
	// console.log("elArr: " + elArr,
	// 	"selector: " + selector);
	elArr.forEach(el => {
		el.style.height = `${el.offsetWidth}px`;
		el.style.maxHeight = `${el.offsetWidth}px`;
	});
}
window.onload = function () {
	round('.js-round');
}

window.addEventListener('scroll', function () {
	let
		$header = document.querySelector('.header'),
		top = pageYOffset;
	if (top > 0) {
		$header.classList.add('scrolled');
	} else {
		$header.classList.remove('scrolled');
	}
})

function getProducts() {
	oil = prodData.oil;
	i = 0;
	for (const item in oil) {
		elemName = Object.keys(oil)[i];
		if (oil.hasOwnProperty(item)) {
			const elem = oil[item];
			createHtmlItem(elem, elemName);
		}
		i++;
	}
};

function createHtmlItem(elem, elemName) {
	// document.querySelector(".--js-insert-here").insertAdjacentHTML("beforeend",
	// 	`<div class="item --${elemName} flex">
	// 	<h2 class="item__title">${elem.name}</h2>
	// 	<p class="item__descr">${elem.descr}</p>
	// 	<p class="item__ingr"><strong>Состав:</strong>${elem.ingr}</p>
	// 	<img class="item__picture" src="images/${elem.picture}" alt="Масло '${elem.name}">
	// 	<p class="item__price">Цена:<strong>${elem.price}грн.</strong></p>
	// 	<p class="item__summ">Сумма: <strong>0</strong><b> грн.</b></p>
	// 	<button class="item__btn item__remove-btn" type="button" data-product="${elemName}" id="${elemName}Minus">-</button>
	// 	<button class="item__btn item__add-btn" type="button" data-product="${elemName}" id="${elemName}Plus">+</button>
	// 	</div>`);
};

let prodData = new Promise(
	function getData(resolve, reject) {
		const prodURL = '../js/json/products.json';
		fetch(prodURL)
			.then((response) => {
				return response.json();
			})
			.then((data) => {
				prodData = data;
				resolve.prodData;
				getProducts();
			});
	});

class CartItem {
	constructor(itemId, itemName, itemCount, itemPrice) {
		this.id = itemId;
		this.itemName = itemName;
		this.itemCount = itemCount;
		this.itemPrice = itemPrice;
		this.itemCost;
		this.itemAdd = function () {
			this.itemCount++;
		}
		this.itemRemove = function () {
			this.itemCount--;
		}
		this.itemGetSumm = function () {
			this.itemSumm = this.itemPrice * this.itemCount;
		};
		this.itemSumm = this.itemGetSumm();
	}
};


let order = {
	orderItems: {},
	getSumm: function () {
		let summ = 0;
		// for (const itemSumm of this.orderItems[itemSumm]) {
		// 	summ += itemSumm;
		// }
		// console.log(this.getSumm);
		return summ;
	},
	// orderSumm: order.getSumm(),
	// orderAddress: getAddress(),
	// orderName: getName()
}

let $plus = document.querySelectorAll(".item__add-btn"),
	$minus = document.querySelectorAll(".item__remove-btn"),
	productId,
	prod;

//FIXME: работает только на первоначальных кнопках, не создаёт обработчик события для кнопок, генерируемых динамически
$plus.forEach.call($plus, function (el) {
	el.addEventListener("click", function (event) {
		productId = el.dataset.product;
		if (productId in order.orderItems) {
			order.orderItems[productId].itemAdd();
		} else {
			prod = new CartItem(oil[productId], oil[productId].name, 1, oil[productId].price);
			order.orderItems[productId] = prod;
			order.orderItems[productId].itemGetSumm();
			el.parentNode.querySelector(".item__remove-btn").removeAttribute('disabled');
		}
		order.orderItems[productId].itemGetSumm();
		document.querySelector(`.--${productId} .item__summ strong`).textContent = order.orderItems[productId].itemSumm;
		console.table(order.orderItems)
	});
});

$minus.forEach.call($minus, function (el) {
	el.addEventListener("click", function (event) {
		productId = el.dataset.product;
		if (order.orderItems[productId].itemCount > 1) {
			order.orderItems[productId].itemRemove();
			document.querySelector(`.--${productId} .item__summ strong`).textContent = order.orderItems[productId].itemSumm;
		} else {
			delete order.orderItems[productId];
			document.querySelector(`.--${productId} .item__summ strong`).textContent = 0;
			el.setAttribute('disabled', 'disabled');
		}
		order.orderItems[productId].itemGetSumm();
		console.table(order.orderItems)
	});
});
//!FIXME

// const sendOrder = new XMLHttpRequest();

const hero_slider = new Swiper('.swiper-container.js-hero-swiper', {
	slidesPerView: 1,
	slidesPerColumn: 1,
	spaceBetween: 0,
	loop: false,
	mode: 'horizontal',
	freeMode: false,
	autoHeight: true,
	calculateHeight: true,
	slideToClickedSlide: true,
	slidesPerGroup: 1,
	navigation: {
		nextEl: '.js-hero-swiper .swiper-button-next',
		prevEl: '.js-hero-swiper .swiper-button-prev',
	},
	// autoplay: {
	// 	delay: 5000,
	// }
});

let slide_id;
document.querySelectorAll('.js-slideTo-link').forEach(el => {
	el.addEventListener('click', function () {
		slide_id = this.dataset.slide;
		hero_slider.slideTo(slide_id);
	})
});