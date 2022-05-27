<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname1 = "db_kandidaten";
$dbname2 = "db_users";
$verbindung1 = mysqli_connect($servername, $username, $password,$dbname1);
if ($verbindung1 -> connect_error) {
    die ("Verbindung Kandidaten-DB fehlgeschlagen: " . $verbindung1 -> connect_error);
}
$verbindung2 = mysqli_connect($servername, $username, $password,$dbname2);
if ($verbindung2 -> connect_error) {
    die ("Verbindung User-DB fehlgeschlagen: " . $verbindung2 -> connect_error);
}

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
//$geburtsdatum = $_POST['geburtsdatum'];  FORMAT:'JAHR-MONAT-TAG'
$geburtsdatum = '1900-12-24';
//Studiengang optgroup
$id = $_POST['id'];

$sqldbcommand2 = "INSERT INTO db_users (`Id`, `vorname`, `nachname`, `geburtsdatum`) 
VALUES ('0', '$vorname', '$nachname', '$geburtsdatum')";
if ($verbindung2->query($sqldbcommand2) === TRUE) {
    echo "Neuer Eintrag erfolgreich erstellt";
  } else {
    echo "Fehler: " . $sqldbcommand2 . "<br>" . $verbindung2->error;
  }

$sqldbcommand1 = "UPDATE db_kandidaten SET stimmen = stimmen + 1 WHERE id = '$id'";

if ($verbindung1->query($sqldbcommand1) === TRUE) {
    echo "Stimmanzahl wurde angepasst";
    echo "Vote für Kandidat" . $id;
  } else {
    echo "Fehler: " . $sqldbcommand1 . "<br>" . $verbindung1->error;
  }
  

header( 'Location: result.php' );


?>