
///
Es muessen alle Dateien nach C:\xampp\htdocs\Testat02 kopiert werden.
Zuseatzlich ist ein DB Inport erforderlich. (Initial muss eine lerre DB "db_users" vorhanden sein)
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