function myFunction(){ 
var i=0;
var id=document.getElementById('id').value;
var id_m=document.getElementById("missing_id");
id_m.textContent="";

if (!id) {

//e.preventDefault();
//alert("false");

id_m.textContent="id missing";
id_m.style.color='red';}
else
	if(isFinite(id))
i++;
else
{
	id_m.textContent="not a number";
id_m.style.color='red';}

var nom=document.getElementById('nom').value;
var nom_m=document.getElementById("missing_nom");
nom_m.textContent="";

if (!nom) {

//e.preventDefault();
//alert("false");

nom_m.textContent="nom missing";
nom_m.style.color='red';}
else 	
i++;



var prenom=document.getElementById('prenom').value;
var prenom_m=document.getElementById("missing_prenom");
prenom_m.textContent="";
if (!prenom) {



prenom_m.textContent="prenom missing";
prenom_m.style.color='red';}
else
i++;


var numero=document.getElementById('numero').value;
var numero_m=document.getElementById("missing_numero");
numero_m.textContent="";
if (!numero) {

numero_m.textContent="numero missing";
numero_m.style.color='red';}
else
	if(isFinite(numero))
i++;
else
{
	numero_m.textContent="not a number";
numero_m.style.color='red';}






if(i==4)
	alert("yaas");
else
	e.preventDefault();


}