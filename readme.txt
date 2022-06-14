///
Es muessen alle Dateien in das htdocs Verzeichnis von XAMPP kopiert werden.
Zuseatzlich ist ein DB Import erforderlich. (Initial muss eine leere DB "db_users" vorhanden sein)
DB-Import (Windows):
Datei "db_users.sql" nach C:\xampp\mysql\bin kopieren
CMD öffnen:
cd C:\xampp\mysql\bin
mysql -u root -p db_users < db_users.sql
///
DB-Export auf der CMD(Windows):
cd C:\xampp\mysql\bin
mysqldump -u root -p db_users > db_users.sql
(Passwortabfrage mit Enter bestätigen)
Datei liegt anschließend unter C:\xampp\mysql\bin\db_users.sql