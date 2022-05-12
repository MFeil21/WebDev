<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kandidaten";
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
}

$tablename = "db_kandidaten";
$columns = ['id', 'vorname', 'nachname', 'stimmen'];
function lese_daten($verbindung, $tablename, $columens){
  $columnName = implode(", ", $columns);
  $dbabfrage = "SELECT ".$columnName." FROM $tablename"." ORDER BY id DESC";
  $result = $verbindung->query($dbabfrage);
}
if($result== true){ 
  if ($result->num_rows > 0) {
     $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
     $msg= $row;
  } else {
     $msg= "Keine Daten vorhanden"; 
  }
 }
 else{
   $msg= mysqli_error($verbindung);
 }
 return $msg;

/*
$id = $_POST['id'];

$sqldbcommand = "UPDATE db_kandidaten SET stimmen = stimmen + 1 WHERE id = '$id'";

if ($verbindung->query($sqldbcommand) === TRUE) {
    echo "Stimmanzahl wurde angepasst";
    echo "Vote für Kandidat" . $id;
  } else {
    echo "Fehler: " . $sqldbcommand . "<br>" . $verbindung->error;
  }

header( 'Location: result.html' );*/

?>