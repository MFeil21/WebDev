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
$columns = ['id', 'kurzname', 'stimmen'];
$suche="SELECT id, kurzname, stimmen FROM db_kandidaten";
$abfrageergebnis= mysqli_query($verbindung, $suche);

$stimmenUebersicht = array();
while($row = mysqli_fetch_array($abfrageergebnis))
{
  $stimmenUebersicht[] = array ( 'id' => $row['id'], 'stimmen' => $row['stimmen'] );
}
// enthaelt Stimmanzahl als Array - Inhalt: [{"id":"1","stimmen":"5"},{"id":"2","stimmen":"3"},{"id":"3","stimmen":"15"}, usw.
$json = json_encode($stimmenUebersicht);

mysqli_close($verbindung);
header( 'Location: result.html' );
?>