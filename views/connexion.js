function Myfunction()
{ 
var i=0;
var id=document.getElementById('id').value;
var id_m=document.getElementById("missing_id");
id_m.textContent="";
e.preventDefault();

if (!id) {

//e.preventDefault();
//alert("false");

id_m.textContent="id missing";
id_m.style.color='red';}
else
i++;
var barcode=document.getElementById('barcode').value;
var barcode_m=document.getElementById("missing_barcode");
barcode_m.textContent="";

if (!barcode) {

//e.preventDefault();
//alert("false");

barcode_m.textContent="barcode missing";
barcode_m.style.color='red';}
else 
	if (isFinite(barcode))
i++;
else
	{barcode_m.textContent="not a number";
barcode_m.style.color='red';}


var quantity=document.getElementById('quantity').value;
var quantity_m=document.getElementById("missing_quantity");
quantity_m.textContent="";
if (!quantity) {

//e.preventDefault();
//alert("false");

quantity_m.textContent="quantity missing";
quantity_m.style.color='red';}
else
	if (isFinite(quantity))
i++;
else
	{quantity_m.textContent="not a number";
quantity_m.style.color='red';}

var category=document.getElementById('category').value;
var category_m=document.getElementById("missing_category");
category_m.textContent="";
if (category==0) {

//e.preventDefault();
//alert("false");

category_m.textContent="category missing";
category_m.style.color='red';}
else
i++;



var type=document.getElementById('type').value;
var type_m=document.getElementById("missing_type");
type_m.textContent="";

if (type==0) {

//e.preventDefault();
//alert("false");

type_m.textContent="type missing";
type_m.style.color='red';
}
else
i++;

if(i==5)
	alert("yaas");
else
	e.preventDefault();

}