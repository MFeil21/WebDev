<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung User-DB fehlgeschlagen: " . $verbindung -> connect_error);
}

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$geburtsdatum = $_POST['geburtsdatum'];
$studiengang = $_POST['studiengang'];
$id = $_POST['id'];

$sqldbcommand = "INSERT INTO db_users (`Id`, `vorname`, `nachname`, `geburtsdatum`, `studiengang`, `partei`) 
VALUES ('0', '$vorname', '$nachname', '$geburtsdatum', '$studiengang', '$id')";
if ($verbindung->query($sqldbcommand) === TRUE) {
    echo "Neuer Eintrag erfolgreich erstellt";
  } else {
    echo "Fehler: " . $sqldbcommand . "<br>" . $verbindung->error;
  }

header( 'Location: result.php' );
?>