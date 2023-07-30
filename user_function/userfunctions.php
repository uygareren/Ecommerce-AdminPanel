<?php

require_once("admin/config/config.php");


function getAllData($table){

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

function getIdBySlug($table, $slug){
    global $db;

    $query = "SELECT * FROM $table WHERE slug = ?";
    $q = $db -> prepare($query);
    $q -> execute([$slug]);
    $result = $q -> fetch(PDO:: FETCH_ASSOC);
    return $result;
}

function getProductByCategoryId($table, $category_id){
    global $db;

    $query = "SELECT * FROM $table WHERE category_id = ?";
    $q = $db -> prepare($query);
    $q -> execute([$category_id]);

    $result = $q -> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}

?>