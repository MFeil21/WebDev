
///
Es muessen die Dateien
main.html, poll.html, poll.php, result.html, result.php
nach C:\xampp\htdocs\Testat02 kopiert werden.
Zuseatzlich werden beide Datenbanken benoetigt. 
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