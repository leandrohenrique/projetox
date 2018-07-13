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

function readTotal()
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
	var produtos      = document.getElementsByClassName("produto");
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
}

function quantidadeMudou()
{
	writeTotal(calculeTotalProduto());
}

function onDocumentLoad()
{
	var textEdits = document.getElementByClassName("quantity");

	for (var i = 0; i < textEdits.length; i ++){
		textEdits[i].onchange = quantidadeMudou;
	}
	window.onload = onDocumentLoad;
}