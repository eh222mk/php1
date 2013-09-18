<?php
session_start();

$ifLogin = 0;
$buttonClick = 0;

if(isset($_SESSION['username']) && $_SESSION['username']){
	$ifLogin = 1;
}

if(isset($_SESSION['buttonClick']) && $_SESSION['buttonClick'] == "2"){
	$buttonClick = 2;
}
else if(isset($_SESSION['buttonClick']) && $_SESSION['buttonClick'] == "1"){
	$buttonClick = 1;
}
else{
	$buttonClick = 0;
}

require_once("/src/view/HTMLpage.php");

$pageView = new HTMLpage(); 
echo $pageView->getPage($ifLogin, $buttonClick);

require_once("time.php");	


	