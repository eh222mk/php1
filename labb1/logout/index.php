<?php

session_start();
//session_destroy();
unset($_SESSION['username']);
//session_start();
$_SESSION['buttonClick'] = 1;

setcookie("usernameCookie", '', time()-7200, "/");
setcookie("passwordCookie", '', time()-7200, "/");

header("Location: ../");
