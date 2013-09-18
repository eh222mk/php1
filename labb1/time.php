<?php

$year = 2000 + date('y' , time()); // 2000 + gör så att det blir år 2013 istället för 13
$month = date('m', time());
$day = date('d', time());
$weekday = date('w', time());
$time = date('H:i:s', time()+7200);//+ 7200 lägger till 2 timmar på $time så det stämmer överens med rätt tidzon

//gör om $weekday till veckodagens namn
switch($weekday){
	case 1:
		$weekday = "Måndag";
		break;
	case 2:
		$weekday = "Tisdag";
		break;
	case 3:
		$weekday = "Onsdag";
		break;
	case 4:
		$weekday = "Torsdag";
		break;
	case 5:
		$weekday = "Fredag";
		break;
	case 6:
		$weekday = "Lördag";
		break;
	case 7:
		$weekday = "Söndag";
		break;
}

//gör om $month till månadens namn
switch ($month) {
	case 1:
		$month = "Januari";
		break;
	case 2:
		$month = "Februari";
		break;
	case 3:
		$month = "Mars";
		break;
	case 4:
		$month = "April";
		break;
	case 5:
		$month = "Maj";
		break;
	case 6:
		$month = "Juni";
		break;
	case 7:
		$month = "Juli";
		break;
	case 8:
		$month = "Augusti";
		break;
	case 9:
		$month = "September";
		break;
	case 10:
		$month = "Oktober";
		break;
	case 11:
		$month = "November";
		break;	
	case 12:
		$month = "December";
		break;
}

//om första karaktären i $day är 0 så plockar den bort det
if($day[0] == "0"){
	$day = ltrim($day, '0');	
}

echo "<p>$weekday, den $day $month år $year. Klockan är [$time] </p>";

?>