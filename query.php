<?php
//TeamMathesFeilWetzl

//Params DB Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";

//Connection Test
$verbindung = mysqli_connect($servername, $username, $password,$dbname);
if ($verbindung -> connect_error) {
    die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
}

//SQL-Abfragen
//ToDo: ergebnis1-3 fuer Altersgruppen liefert Anzahl zurueck, aber nicht fuer alle 6 Parteien
  //Alle
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL GROUP BY partei";
  $ergebnis0 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Alter U 18
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND TIMESTAMPDIFF(YEAR, geburtsdatum, CURDATE()) <18 GROUP BY partei";
  $ergebnis1 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Alter 18-30
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND TIMESTAMPDIFF(YEAR, geburtsdatum, CURDATE()) BETWEEN 18 AND 30 GROUP BY partei";
  $ergebnis2 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Alter Ü 30
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND TIMESTAMPDIFF(YEAR, geburtsdatum, CURDATE()) >30 GROUP BY partei";
  $ergebnis3 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Computer Science
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang ='Computer Science' GROUP BY partei";
  $ergebnis4 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Informatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Informatik' GROUP BY partei";
  $ergebnis5 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Medieninformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Medieninformatik' GROUP BY partei";
  $ergebnis6 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Mobile Computing
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Mobile Computing' GROUP BY partei";
  $ergebnis7 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Wirtschaftsinformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Wirtschaftsinformatik' GROUP BY partei";
  $ergebnis8 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Master Informatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Informatik' GROUP BY partei";
  $ergebnis9 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Master Applied Research in Computer Science
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Applied Research in Computer Science' GROUP BY partei";
  $ergebnis10 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Master Software Engineering for Industrial Applications
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Software Engineering for Industrial Applications' GROUP BY partei";
  $ergebnis11 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang Verwaltungsinformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Verwaltungsinformatik' GROUP BY partei";
  $ergebnis12 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Studiengang andere Fakultät
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='andere Fakultät' GROUP BY partei";
  $ergebnis13 = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));

  //Verpacke alle Queries
  $arrays = array (
    json_encode($ergebnis0),
    json_encode($ergebnis1),
    json_encode($ergebnis2),
    json_encode($ergebnis3),
    json_encode($ergebnis4),
    json_encode($ergebnis5),
    json_encode($ergebnis6),
    json_encode($ergebnis7),
    json_encode($ergebnis8),
    json_encode($ergebnis9),
    json_encode($ergebnis10),
    json_encode($ergebnis11),
    json_encode($ergebnis12),
    json_encode($ergebnis13)
  );

  //Echo die Arrays an die POST Request
  echo json_encode($arrays);
  mysqli_close($verbindung);

?>
