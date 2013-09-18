<?php

session_start();
if($_POST){
	//tar värderna från formuläret som skickades in
	$username = $_POST['usernameID'];
	$password = $_POST['passwordID'];
	$autologin = $_POST['autologinID'];
		
	if($username == "Admin"){
		if($password == "Password"){
			if($autologin == TRUE){
				
			}
			$_SESSION['username'] = $username;
			echo "<!doctype html>
			<html lang='sv'
			<head>
				<meta charset='utf-8' />
				<title>Laboration 1 php</title>
				<link rel='stylesheet' href='../css.css' />
			</head>
			<body>
				<h1>Laboration 1</h1>
				<h2>$username är inloggad</h2>
				<p>Inloggning lyckades<p>
				<a href='../logout'>Logga ut</a>
				<p></p>
			</body>
			";
					
			//$_SESSION['password'] = $password; //Behövs inte i det här programmet.
		}	
	}
}

else{
echo "<!DOCTYPE html>
<html lang='sv'>
	<head>
		<meta charset='utf-8' />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
		<title>Laboration 1 php</title>
		<meta name='description' content='' />
		<meta name='author' content='eh222mk' />
		<meta name='viewport' content='width=device-width; initial-scale=1.0' />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel='shortcut icon' href='favicon.ico' /> 
		<link rel='apple-touch-icon' href='/apple-touch-icon.png' />
		<link rel='stylesheet' href='../css.css' />
	</head>
	<body>
		<h1>Laboration 1 </h1>
		<h2>Ej Inloggad </h2>
		<form id='loginForm' method='POST' action='login'>
		<fieldset>
			<legend>Login - Skriv in användarnamn och lösenord</legend>
			<p>Användarnamn: <input type='text' id='usernameID'></input>
			 Lösenord: <input type='password' id='passwordID'></input> 
			 Håll mig inloggad: <input type='checkbox' id='autoLoginID'></input> 
			 <input type='submit' value='Logga in'></input>
		</fieldset>
		</form>		
	</body>
	<footer>
	</footer>";
}	



include_once('../time.php');	
echo "</html>"
?>