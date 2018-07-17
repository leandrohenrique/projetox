function readTotal()
{
	var total = $("#total").text();
	return moneyTextToFloat(total);
}

function writeTotal(value)
{
	var text = floatToMoneyText(value);
	$("#total").text(text);
}

function calculateTotalProducts()
{
	var produtos = $(".produto");
	var total = 0;
	$(produtos).each(function(pos,produto){
	// for (var pos; pos < produtos.length; pos ++) {
		var $produto = $(produtos);
		var quantity = moneyTextToFloat(
			$produto.find(".quantity").val());
		var price = moneyTextToFloat(
			$produto.find(".price").text());
		total += quantity * price;
	});

	return total;
}

// $(".quantity").change(function(){
// 	writeTotal(calculateTotalProducts());
// });




var todosElementos = document.getElementsByTagName("*");
var resutados = [];

var elemento;
for (var i = 0; (elemento = todosElementos[i]) != null; i ++) {
	var elementoClass = elemento.className;

	if (elementoClass && elementoClass.indexOf(className) != -1) {
		resutados.push(elemento);	
	}
}

function moneyTextToFloat(text)
{
	var cleanText = text.replace("R$", "").replace(",",".");
	return parseFloat(cleanText);	
}

function floatToMoneyText(value)
{
	var text = (value < 1 ? "0" : "") + Math.floor(value * 100);
	text = "R$" + text;
	return text.substr(0,text.length -2) + "," + text.substr(-2);
}

function onDocumentLoad()
{
	var textEdits = document.getElementByClassName("quantity");

	for (var i = 0; i < textEdits.length; i ++){
		textEdits[i].onchange = function(){
			writeTotal(calculeTotalProduto());
		}
	}
	window.onload = onDocumentLoad;
}

/*function readTotal()
{
	var total = document.getElementById("total");
	return moneyTextToFloat(total.innerHTML);
}

function writeTotal(value)
{
	var total       = document.getElementById("total");
	total.innerHTML = floatToMoneyText(value);
}


function calculeTotalProduto()
{
	var produtos      = document.getElementsByClassName("produto");// cria um array 
	var totalProdutos = 0;

	for (var pos = 0; pos < produtos.length; pos++) {
		var priceElements = produtos[pos].getElementsByClassName("price");
		var priceText     = priceElements[0].innerHTML;
		var price         = moneyTextToFloat(priceText);

		var qtyElements = produtos[pos].getElementsByClassName("quantity");
		var qtyText     = qtyElements[0].innerHTML;
		var quantity    = moneyTextToFloat(qtyText);

		
		var subtotal = quantity * price;
		totalProdutos += subtotal;
	}
	return totalProdutos;
}*/
	
