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
$suche="SELECT id, nachname, vorname, stimmen FROM db_kandidaten";
$abfrageergebnis= mysqli_query($verbindung, $suche);
while ($row = mysqli_fetch_row($abfrageergebnis)) {
  printf("ID %s Nachname %s |||", $row[0], $row[1]);
  printf("ID %s Vorname %s |||", $row[0], $row[2]);
  printf("ID %s Stimmzahl %s |||", $row[0], $row[3]);
}



?>