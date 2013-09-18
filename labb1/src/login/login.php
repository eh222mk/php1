<?php

class Login{
	
public function loginUser($username, $password, $autologin){
	
	if($username == "Admin"){
		if($password == "Password"){
			
			$_SESSION['username'] = $username;
			//$_SESSION['errorMessage'] = "";
			unset($_SESSION['errorMessage']);
			unset($_SESSION['userInput']);
			
			if($autologin == 1){
				$_SESSION['buttonClick'] = 2;
						
				$salt = "orewaErikudesu93";
				
				$tempPassword = crypt($tempPassword.$username, $salt);
				
				setcookie("usernameCookie", $username, time()+120, "/");
				setcookie("passwordCookie", $tempPassword, time()+120, "/");
				
				return TRUE;
			}
			else{
				$_SESSION['buttonClick'] = 1;
				return TRUE;	
			}
			
		}//end of if password
		else{
			$_SESSION['userInput'] = $username;
			$_SESSION['errorMessage'] = "<p>Felaktigt användarnamn och/eller lösenord</p>";
			return FALSE;
		}
	}//end of if username
		$_SESSION['userInput'] = $username;
		$_SESSION['errorMessage'] = "<p>Felaktigt användarnamn och/eller lösenord</p>";
		return FALSE;

}//end of function

}//end of class