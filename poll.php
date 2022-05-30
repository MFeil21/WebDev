<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kandidaten";
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
}

$id = $_POST['id'];

$sqldbcommand = "UPDATE db_kandidaten SET stimmen = stimmen + 1 WHERE id = '$id'";

if ($verbindung->query($sqldbcommand) === TRUE) {
    echo "Stimmanzahl wurde angepasst";
    echo "Vote für Kandidat" . $id;
  } else {
    echo "Fehler: " . $sqldbcommand . "<br>" . $verbindung->error;
  }

header( 'Location: result.php' );

?>