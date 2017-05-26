function clicked(){
	var name=document.getElementById('nameCheck').value;
	var pass=document.getElementById('passCheck').value;
	if((name!="")&&(pass!="")){
		return true;
	}
	else{
		alert("Please fill all fields...");
		return false;
	}
}