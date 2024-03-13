<?php
$serverName = '192.168.0.151';
$database = 'MotoSegura';
$user = 'SA';
$pass = 'ala*789';

try {
    $dsn = "sqlsrv:Server=$serverName;Database=$database";

    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>