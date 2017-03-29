function validate(){
			var email = document.getElementById("email").value;
			var password = document.getElementById("pwd").value;
			
			var msg = document.getElementById("msg");
			
			var error = false;
			
			var pattern = /[a-z0-9.]{2,}[@][a-z.]{1,}[.][a-z]{2,}/;	//Pattern e-mail
			
			//Controlli deprecati --> se ne occupa HTML5, necessari però lato server
			if(pattern.test(email) == true){
				//email valida
			}else{
				//alert("Attenzione: email non valida");
				msg.innerHTML = "Attenzione: e-mail non valida";
				document.getElementById("pwd").value = "";
				error = true;
			}
			
			if(password == ""){
				//alert("Attenzione campo password vuoto");
				msg.innerHTML = "Attenzione: campo password vuoto";
				error = true;
			}
			
			if(error == true){
				//C'è stato un errore
				//msg.setAttribute("style", "color: red");
				return false;
			}else{
				//Tutto ok, posso inviare i dati
				msg.setAttribute("style", "color: green");
				msg.innerHTML = "FORM VALIDO";
				return true;
			}
}