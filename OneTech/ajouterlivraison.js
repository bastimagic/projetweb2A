function myFunction(){ 
var i=0;
var cin=document.getElementById('cin').value;
var cin_m=document.getElementById("missing_cin");
cin_m.textContent="";

if (!cin) {

//e.preventDefault();
//alert("false");

cin_m.textContent="cin missing";
cin_m.style.color='red';}
else
	if(isFinite(cin))
i++;
else
{
	id_m.textContent="not a number";
id_m.style.color='red';}

var id_commande=document.getElementById('ID_commande').value;
var id_commande_m=document.getElementById("missing_id_commande_m");
id_commande_m.textContent="";

if (!id_commande_m) {

//e.preventDefault();
//alert("false");

id_commande_m_m.textContent="ID_commande missing";
id_commande_m_m.style.color='red';}
else 	
i++;



var adresse=document.getElementById('adresse').value;
var adresse_m=document.getElementById("missing_adresse");
adresse_m.textContent="";
if (!adresse) {



adresse_m.textContent="adresse missing";
adresse_m.style.color='red';}
else
i++;








if(i==3)
	alert("votre livraison est enregistrer");
else
	e.preventDefault();


}