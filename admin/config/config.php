<?php
// Veritabanı bilgileri
$host = 'localhost'; 
$dbname = 'eticaret'; 
$username = 'root'; 
$password = ''; 

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->exec("SET NAMES 'utf8'");
    
    echo "Veritabanı bağlantısı başarıyla kuruldu!";
} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>
