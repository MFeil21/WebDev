<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
}
$tablename = "db_users";
$suche="SELECT id, geburtsdatum, studiengang, partei FROM db_users";
$abfrageergebnis= mysqli_query($verbindung, $suche);

$stimmenUebersicht = array();
while($row = mysqli_fetch_array($abfrageergebnis))
{
  $stimmenUebersicht[] = array ( 'id' => $row['id'], 'geburtsdatum' => $row['geburtsdatum'], 'studiengang' => $row['studiengang'], 'partei' => $row['partei'] );
}

$json = json_encode($stimmenUebersicht);

mysqli_close($verbindung);
header( 'Location: result.html' );
?>