<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
}

$pseudonym = $_POST['pseudonym'];
if(!is_null($_POST['vorname']))
    $vorname = $_POST['vorname'];
if(!is_null($_POST['nachname']))
    $nachname = $_POST['nachname'];
if(!is_null($_POST['geburtsjahr']))
    $geburtsjahr = $_POST['geburtsjahr'];

$sqldbcommand = "INSERT INTO db_users (`Id`, `pseudonym`, `vorname`, `nachname`, `geburtsjahr`) 
VALUES ('0', '$pseudonym', '$vorname', '$nachname', '$geburtsjahr')";

if ($verbindung->query($sqldbcommand) === TRUE) {
    echo "Neuer Eintrag erfolgreich erstellt";
  } else {
    echo "Fehler: " . $sqldbcommand . "<br>" . $verbindung->error;
  }
$sqlstart = mysqli_query($verbindung, $sqldbcommand);

?>