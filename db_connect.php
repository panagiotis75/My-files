<?php
$host = '127.0.0.1:3307'; // Ή 'localhost:3307'
$db   = 'arxaia_ellada_db';
$user = 'root';
$pass = '';

try {
    // Σύνδεση με PDO για ασφάλεια και ευκολία
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Αποτυχία σύνδεσης: " . $e->getMessage());
}
?>