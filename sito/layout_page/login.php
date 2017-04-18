<?php
	if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$email = trim($_POST['email']);
		} else {
		echo $_POST['email'];
		//campo email vuoto o email che non segue il formato
		header('Location: index.php?error=1');
	}
	
	if (isset($_POST['pwd']) && !empty($_POST['pwd'])) {
		$pwd = trim($_POST['pwd']);
	} else {
		//campo pwd vuoto
		header('Location: index.php?error=2');
	}
		
	
	//verifica esistenza utente
	$file = fopen("./../private/users.txt","r");
	if ($file == false) {
		//file users.txt insesistente
		header('Location: index.php?error=5');
	} else {
		while(($line = fgets($file)) !== false) {
			//leggo riga
			$value = explode("," , $line);
			if( $value[0] == $email && $value[1] == md5($pwd)) {
				//interrompi flusso
				fclose($file);
				session_start();
				//set session variable
				$_SESSION["email"] = $value[0];
				$_SESSION["username"] = $value[2];
				$_SESSION["nome"] = $value[3];
				$_SESSION["cognome"] = $value[4];
				$_SESSION["data"] = $value[6];
				$_SESSION["indirizzo"] = $value[7];
				$_SESSION["cap"] = $value[8];
				//Se è attivo l'autologin creo un cookie per gestirlo
				if ($_POST['remember'] == true) {
					setcookie('autologin', $value[0], time()+60*60*7);
					//echo "Cookie settato"; //--DEBUG ONLY
				}	
				header('Location: profilo.php?login');
				
			}
			else {
				//header('Location: index.php?NotMatched');
			}
		}
		//Nessuna corrispondenza trovata
		fclose($file);
		header('Location: index.php?NotMatched');		
	}
?>
