Hello World
Hello Test
Matthias Check
Sabrina Check
Manuel Check
final Check
///
//
/
//
///
Es muessen die Dateien main.html, main.php, poll.html, result.html, script.js, style.css nach C:\xampp\htdocs\Testat02 kopiert werden.
Aktuell ist nur in main.html&php relevanter Content
Zuseatzlich wird die Datenbank benoetigt.
DB-Import:
Datei "db_users.sql" nach C:\xampp\mysql\bin kopieren
CMD öffnen:
cd C:\xampp\mysql\bin
mysql -u root -p db_users < db_users.sql
//
DB-Export auf der CMD:
cd C:\xampp\mysql\bin
mysqldump -u root -p db_users > db_users.sql
(Passwortabfrage mit Enter bestätigen)
Datei liegt anschließend unter C:\xampp\mysql\bin\db_users.sql