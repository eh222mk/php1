<?php

class HTMLpage {

public function getPage($inloggad, $buttonClick){
	$content = "";
	$buttonClickLogin = NULL;
	$buttonClickLogout = NULL;
	
	//echo "<script>alert('$buttonClick');</script>";
	//Definerar Output
	if($buttonClick == 1){
		$buttonClickLogin = "<p>Inloggning lyckades</p>";
		$buttonClickLogout = "<p>Du har nu loggat ut.</p>";
		$_SESSION['buttonClick'] = 0;
	}
	else if($buttonClick == 2){
		$buttonClickLogin = "<p>Inloggning lyckades och vi kommer ihåg dig nästa gång</p>";
		$buttonClickLogout = "<p>Du har nu loggat ut.</p>";
		$_SESSION['buttonClick'] = 0;
	}
	
	//Output
	if($inloggad == 1){
		$inloggad = "Inloggad som Admin";
		$content = "$buttonClickLogin
		<p> <a href='logout'>Logga ut</a> </p>";
	}
	else{
		$errorMessage = "";
		if(isset($_SESSION['errorMessage'])){
			$errorMessage = $_SESSION['errorMessage'];
		}
		
		$userInput = "";
		if(isset($_SESSION['userInput'])){
			$userInput = $_SESSION['userInput'];
		}
		
		
		$inloggad = "Ej inloggad";
		$content = "<form id='loginForm' method='POST' action='login/login.php'>
		<fieldset>
			<legend>Login - Skriv in användarnamn och lösenord</legend> $buttonClickLogout
			$errorMessage
			<p>Användarnamn: <input type='text' id='usernameID' name='usernameID' value='$userInput'> </input>
			 Lösenord: <input type='password' id='passwordID' name='passwordID'></input> 
			 Håll mig inloggad: <input type='checkbox' id='autologinID' name='autologinID' value='value1'></input> 
			 <input type='submit' value='Logga in'></input>
		</fieldset>
	</form>	";
	
	unset($_SESSION['errorMessage']);
	unset($_SESSION['userInput']);
	}
		
	return "<!DOCTYPE html>
<html lang='sv'>
	<head>
		<meta charset='utf-8' /> 
	</head>
	<body>
		<h1>Laboration 1 </h1>
		<h2>$inloggad</h2>
		<p>$content<p>	
	</body>
	<footer>
	</footer>";
	}
}