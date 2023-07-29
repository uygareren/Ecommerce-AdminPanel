<?php

include("../admin/config/config.php");


function getData($table){

    global $db;
    
    // Verileri çekme sorgusu
    $query = "SELECT * FROM $table";

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

        

    } catch(PDOException $e) {
        echo "Veri çekme işlemi sırasında hata oluştu: " . $e->getMessage();
    }
}

function getDataById($table, $id){

    global $db;

    $q = $db -> prepare("SELECT * FROM $table WHERE id=? ");
    $q->execute([$id]);
    $result = $q->fetch(PDO::FETCH_ASSOC);
    return $result;

}

