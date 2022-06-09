<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_users";
  $verbindung = mysqli_connect($servername, $username, $password,$dbname);
  if ($verbindung -> connect_error) {
      die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
  }
  //Alle
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL GROUP BY partei";

  //Alter U 18 
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL GROUP BY partei";

  //Alter 18-30
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL GROUP BY partei";

  //Alter Ü 30
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL GROUP BY partei";

  //Studiengang Computer Science
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang ='Computer Science' GROUP BY partei";

  //Studiengang Informatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Informatik' GROUP BY partei";

  //Studiengang Medieninformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Medieninformatik' GROUP BY partei";

  //Studiengang Mobile Computing
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Mobile Computing' GROUP BY partei";

  //Studiengang Wirtschaftsinformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Wirtschaftsinformatik' GROUP BY partei";

  //Studiengang Master Informatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Informatik' GROUP BY partei";

  //Studiengang Master Applied Research in Computer Science
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Applied Research in Computer Science' GROUP BY partei";

  //Studiengang Master Software Engineering for Industrial Applications
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Master Software Engineering for Industrial Applications' GROUP BY partei";

  //Studiengang Verwaltungsinformatik
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='Verwaltungsinformatik' GROUP BY partei";

  //Studiengang andere Fakultät
  $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei IS NOT NULL AND studiengang='andere Fakultät' GROUP BY partei";

  //Parse Ergebnis
  $ergebnis = mysqli_fetch_all(mysqli_query($verbindung, $abfrage));
  echo json_encode($ergebnis);

  
      
  mysqli_close($verbindung);
      
?>