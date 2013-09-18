<?php
session_start();

//tar in värderna från formuläret och gör dem till variabler
$username = $_POST['usernameID'];
$password = $_POST['passwordID'];
$autologin = $_POST['autologinID'];


//if($_POST['autologinID'] == 'value1'){
//	$autologin = 1;
//}

if($username == ""){
	$_SESSION['errorMessage'] = "<p>Användarnamn saknas</p>";
}
else if($password == ""){
	$_SESSION['errorMessage'] = "<p>Lösenord saknas</p>";
	$_SESSION['userInput'] = $username;
}
else{
	if(isset($_POST['autologinID'])){
		$autologin = 1;
	}
	else{
		$autologin = 0;
	}
	
	require_once("../src/login/login.php");  
	
	$login = new Login();
	$login->loginUser($username, $password, $autologin);  
}

header("Location: ../index.php"); //skickar tillbaka till föregående sida
