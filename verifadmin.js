function verif(){
	var titre= document.getElementByid("titre").value;
	var matiere= document.getElementByid("matiere").value;
    var id=document.getElementByid("id").value;

    
    var a='@';
	var errors="<ul>";
	var er=0;
    if(matiere.length==0){
		errors+="<li>veuillez saisir un matiere</li>";
		er=1;
	}
	else if(matiere.charAt(0) < 'A' || matiere.charAt(0)> 'Z'){
		//alert("Le matiere doit commencer par une lettre majuscule");
		errors+="<li>Le matiere doit commencer par une lettre majuscule</li>";
		er=1;
	}
    if(titre.length==0){
		errors+="<li> veuillez saisir un titre </li>";
		er=1;
	}
	else if(titre.charAt(0) < 'A' || titre.charAt(0)> 'Z'){
		//alert("Le titre doit commencer par une lettre majuscule");
		errors+="<li>Le titre doit commencer par une lettre majuscule</li>";
		er=1;
	}
    
    

	

	errors+="</ul>";
	document.getElementByid("erreur").innerHTML=errors;
	if(er===1){
		return false;
	}
	return true;
}
