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

echo "<table border='1'>
<tr>
<th>Kurzname</th>
<th>Stimmen</th>
</tr>";

while($row = mysqli_fetch_array($abfrageergebnis))
{
echo "<tr>";
echo "<td>" . $row['kurzname'] . "</td>";
echo "<td>" . $row['stimmen'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($verbindung);
?>