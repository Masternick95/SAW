<?php
	if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$email = trim($_POST['email']);
		} else {
		//campo email vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['psw1']) && !empty($_POST['psw1'])) {
		$psw1 = trim($_POST['psw1']);
	} else {
		//campo psw1 vuoto
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['psw2']) && !empty($_POST['psw2'])) {
		//$psw2 = addcslashes(trim($_POST['psw2']));
		$psw2 = trim($_POST['psw2']);
	} else {
		//campo nome vuoto
		header('Location: index.html?error=1');	
	}
	
	if($psw1 !== $psw2) {
		//psw non coincidono
		header('Location: index.html?error=2');
	}
	
	//Controllo altre variabili
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = trim($_POST['nome']);
		} else {
		//campo email vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['cognome']) && !empty($_POST['cognome'])) {
		$cognome = trim($_POST['cognome']);
		} else {
		//campo cognome vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['sesso']) && !empty($_POST['sesso'])) {
		$sesso = trim($_POST['sesso']);
		} else {
		//campo sesso vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['data']) && !empty($_POST['data'])) {
		$data = trim($_POST['data']);
		} else {
		//campo data vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['luogo']) && !empty($_POST['luogo'])) {
		$luogo = trim($_POST['luogo']);
		} else {
		//campo luogo vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['indirizzo']) && !empty($_POST['indirizzo'])) {
		$indirizzo = trim($_POST['indirizzo']);
		} else {
		//campo indirizzo vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	if (isset($_POST['cap']) && !empty($_POST['cap'])) {
		$cap = trim($_POST['cap']);
		} else {
		//campo cap vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}

	if (isset($_POST['username']) && !empty($_POST['username'])) {
		$username = trim($_POST['username']);
		} else {
		//campo username vuoto o email che non segue il formato
		header('Location: index.html?error=1');
	}
	
	//############################################################
	//Controllo esistenza email
	$file = fopen("./../private/users.txt","r");
	if ($file == false) {
		//file users.txt insesistente
		header('Location: registrazione.html?error=3');
		return;
	} else {
		while(($line = fgets($file)) !== false) {
			//leggo riga
			$value = explode(",",$line);
			if($value[0] == $email) {
				//interrompi flusso
				fclose($file);
				header('Location: registrazione.html?error=4');
				return;
			} 			
		}	
	}
	fclose($file);
	
	
	//creo o leggo 
	$file = fopen("./../private/users.txt", "a");
	if ($file == false) {
		//errore
		header('Location: index.php?error=5');
	} else {
		$line = $email.",".md5($psw1).",".$username.",".$nome.",".$cognome.",".$sesso.",".date("d-m-Y", strtotime($data)).",".$indirizzo.",".$cap.",".$luogo.PHP_EOL;
		fwrite($file, $line);
		fclose($file);
		header('Location: index.php?success=true');
	}

?>
