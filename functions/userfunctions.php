<?php

include("admin/config/config.php");


function getAll($table){

    global $db;
    
    // Verileri çekme sorgusu
    $query = "SELECT * FROM $table ";

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

        

    } catch(PDOException $e) {
        echo "Veri çekme işlemi sırasında hata oluştu: " . $e->getMessage();
    }
}

?>