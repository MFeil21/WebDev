<?php
// TeamMathesFeilWetzl

//Params DB Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";

//Connection Test
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung User-DB fehlgeschlagen: " . $verbindung -> connect_error);
}

// Values POST-Request
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$geburtsdatum = $_POST['geburtsdatum'];
$studiengang = $_POST['studiengang'];
$id = $_POST['id'];

// SQL-Insert = Abgabe der Stimme
$sqldbcommand = "INSERT INTO db_users (`Id`, `vorname`, `nachname`, `geburtsdatum`, `studiengang`, `partei`)
VALUES ('0', '$vorname', '$nachname', '$geburtsdatum', '$studiengang', '$id')";
if ($verbindung->query($sqldbcommand) === TRUE) {
    echo "Neuer Eintrag erfolgreich erstellt";
  } else {
    echo "Fehler: " . $sqldbcommand . "<br>" . $verbindung->error;
  }

  // Redirect auf Ergebnisseite
header( 'Location: results.html' );
?>
