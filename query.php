<?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_users";
      $verbindung = mysqli_connect($servername, $username, $password,$dbname);
      if ($verbindung -> connect_error) {
          die ("Verbindung fehlgeschlagen: " . $verbindung -> connect_error);
      }

      /*
      $tablename = "db_users";
      $suche="SELECT id, geburtsdatum, studiengang, partei FROM db_users";
      $abfrageergebnis= mysqli_query($verbindung, $suche);
      $count1="SELECT COUNT(id) FROM db_users WHERE partei=1";
      $count2="SELECT COUNT(id) FROM db_users WHERE partei=2";
      $abfrageergebnis1= mysqli_query($verbindung, $count1);
      $abfrageergebnis2= mysqli_query($verbindung, $count2);

      $row1 = $abfrageergebnis1->fetch_assoc();
      print_r($row1);
      $row2 = $abfrageergebnis2->fetch_assoc();
      print_r($row2);
      $stimmenUebersicht = array();
      while($row = mysqli_fetch_array($abfrageergebnis))
      {
        $stimmenUebersicht[] = array ( 'id' => $row['id'], 'geburtsdatum' => $row['geburtsdatum'], 'studiengang' => $row['studiengang'], 'partei' => $row['partei'] );
      }
      $json1 = json_encode($stimmenUebersicht);
      $json2 = json_encode($row2);
      print_r($json2);
      */

      $abfrage = "SELECT COUNT(*) FROM db_users WHERE partei = 3";
      $json1 = mysqli_query($verbindung, abfrage);
      
      mysqli_close($verbindung);
      
    ?>