<?php
$servername = "m347-kn04a-db";
$username = "testuser";
$password = "testpass";
$dbname = "testdb";

// Wiederhole Verbindungsversuche bis DB bereit ist
$attempts = 5;
$connected = false;

while ($attempts > 0 && !$connected) {
    $conn = @new mysqli($servername, $username, $password, $dbname);
    if ($conn && !$conn->connect_error) {
        $connected = true;
        break;
    }
    sleep(2); // warte 2 Sekunden
    $attempts--;
}

if (!$connected) {
    die("Verbindung zur Datenbank konnte nicht aufgebaut werden.");
}

$result = $conn->query("SELECT NOW()");
$row = $result->fetch_row();
echo "Verbindung erfolgreich! Aktuelle Zeit: " . $row[0];
?>
