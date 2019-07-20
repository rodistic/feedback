<?php // DAMIT wird PHP deklariert kann immer gemacht werden einfach <?php?.> machen

	
	//Deklarierung Variable durch $ als werd nehmen wir GET also er zieht den msg= wert aus der Domain
	$msg = $_GET["msg"];
	
	//Für POST METHOD $msg = $_POST["msg"];


	//Optische Ausgabe in HTML bzw wird man im ALERT sehen wenn alles rausgeht
	echo $msg; 

	//Lets Prepare an E-Mail

//Text wird in "" geschrieben... in der mitte mit "" unterbrochen dazwischen ein Punkt eine Variable und ein Punkt ... damit wird alles verbunden
$mailtext = "Ein kranker Yeeter hat dir folgendes Feedback hinterlassen '".$msg."'. Krass oder?";

$empfaenger = "yourmail@yeeter.com"; //Mailadresse
$absender   = "info@stalk.zone";
$betreff    = "Feedback TIME!";
$antwortan  = "info@stalk.zone";
 
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
 
$header .= "From: $absender\r\n";
$header .= "Reply-To: $antwortan\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();
 

// JUST SEND IT
mail( $empfaenger,
      $betreff,
      $mailtext,
      $header);


//YOU WANT SOME DATABASE SHIT?! Hell ye
//Verbindung aufbauen

// $link = mysqli_connect("hostname:port", "user", "password", "dbname");

//Fehler anzeigen falls es nicht ging
//if (!$link) {
//    echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
//    echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
//    exit;
//}

//Some UTF8 for Ös and Üs
//mysqli_set_charset($link,"utf8");

//DATENBANK SACHEN SPEICHERN
// mysqli_query($link,"INSERT INTO tabellename (spalte) VALUE ('$msg')");

?>