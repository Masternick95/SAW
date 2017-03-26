function validate(){
	var nome = document.getElementById("nome").value;
	var cognome = document.getElementById("cognome").value;
	var data = document.getElementById("data").value;
	var luogo = document.getElementById("luogo").value;
	var indirizzo = document.getElementById("indirizzo").value;
	var cap = document.getElementById("cap").value;
	var email = document.getElementById("email").value;
	var tel = document.getElementById("telefono").value;
	var sesso = document.getElementById("sesso").value;
	var username = document.getElementById("username").value;
	var psw1 = document.getElementById("psw1").value;
	var psw2 = document.getElementById("psw2").value;
	
	var msg = document.getElementById("msg");
	
	var pattern_email = /[a-z0-9.]{2,}[@][a-z.]{1,}[.][a-z]{2,}/;	//Pattern e-mail
	//var pattern_data_old = /[0-3][0-9][/][0-1][0-9][/][1,2][0,9][0-9][0-9]/;	//Pattern data
	var pattern_data = /[1,2][0,9][0-9][0-9][-][0-1][0-9][-][0-3][0-9]/;
	
	//alert(data);	//Formato data: anno-mese-giorno
	
	if(nome == ""){
		alert("Campo nome vuoto");
	}
	
	if(cognome = ""){
		alert("Campo cognome vuoto");
	}
	
	if(data == ""){
		alert("Campo data vuoto");
	}
	
	if(luogo == ""){
		alert("Campo luogo vuoto");
	}
	
	if(indirizzo == ""){
		alert("Campo indirizzo vuoto");
	}
	
	if(cap == ""){
		alert("Campo cap vuoto");
	}
	
	if(email == ""){
		alert("Campo e-mail vuoto");
	}
	
	if(pattern_email.test(email) == false){
		alert("Attenzione: email non valida");
		document.getElementById("psw1").value = "";
		document.getElementById("psw2").value = "";
	}
	
	if(sesso == ""){
		alert("Sei un maschietto o una femminuccia?");
	}
	
	if(username == ""){
		alert("Campo unsername vuoto");
	}
	
	if(psw1 == ""){
		alert("Campo password vuoto");
	}
	
	if(psw2 == ""){
		alert("Campo conferma password vuoto");
	}
	
	if(psw1 != psw2){
		alert("Campi password non coincidono");
		document.getElementById("psw2").value = "";
	}	
	return false;
}