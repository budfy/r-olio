let oil;

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
	document.body.insertAdjacentHTML("beforeend",
		'<div class="item">' +
		'<h2 class="item__title">' + elem.name + ' - </h2>' +
		'<p class="item__descr">' + elem.descr + '</p>' +
		'<p class="item__ingr"><strong>Состав:</strong> ' + elem.ingr + '</p>' +
		'<img class="item__picture" src="images/' + elem.picture + '" alt="Масло ' + elem.name + '">' +
		'<p class="item__price">Цена:<strong>' + elem.price + 'грн.</strong></p>' +
		`<button class="item__btn item__remove-btn" type="button" data-product="${elemName}" id="${elemName}Minus">-</button>` +
		`<button class="item__btn item__add-btn" type="button" data-product="${elemName}" id="${elemName}Plus">+</button>` +
		'</div>');
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
		//FIXME: мутод нихера не работает. Данные не забирает и выдаёт андифайнед.
		this.itemSumm = function () {
			this.itemPrice * this.itemCount;
		};
		//!FIXME
	}
};


const order = {
	orderItems: {},
	// orderSumm: getSumm(),
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
			order.orderItems[productId].itemSumm();
		}
		order.orderItems[productId].itemSumm();
	});
});
//!FIXME

$minus.forEach.call($minus, function (el) {
	el.addEventListener("click", function (event) {
		productId = el.dataset.product;
		if (order.orderItems[productId].itemCount > 1) {
			order.orderItems[productId].itemRemove();
		} else {
			delete order.orderItems[productId];
		}
		order.orderItems[productId].itemSumm();
	});
});