function myFunction()
{ 
let nomP, prixP, qteP;
	let teste=true;
	nomP=produitf.nomP.value;
	prixP=produitf.prixP.value;
	qteP=produitf.qteP.value;
	if (nomP.length < 5 || nomP.length > 30)
	{
		teste=false;
	}
	if (prixP < 200 || prixP > 900 ) 
	{
		teste=false;
	}
	if (qteP < 5 || qteP > 15)
	{
		teste=false;
	}
	 if (teste===false)
	 {
   	alert("Verifiez vos informations.");

   	 }
   	 else
   	 {
   	 	alert("Ajout avec succès.")
   	 }
   	

}