<?php
function koneksi() {
    $host = "sql307.infinityfree.com";
    $dbname = "if0_41997454_db_ELibrary";
    $username = "if0_41997454";
    $password = "JuySYMjJg4b9mW";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        return $conn;
    } catch (PDOException $e) {
        die("Koneksi Gagal: " . $e->getMessage());
    }
}
?>