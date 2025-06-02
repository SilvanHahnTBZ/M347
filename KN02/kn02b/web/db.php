<?php
$host = 'db';              // Hostname (Alias aus --link)
$user = 'root';            // Benutzer (aus ENV)
$password = 'rootpass';    // Passwort (aus ENV)
$database = 'demo';        // Datenbankname (aus ENV)

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $mysqli->connect_error);
} else {
    echo "✅ Verbindung zur Datenbank war erfolgreich!";
}
?>
