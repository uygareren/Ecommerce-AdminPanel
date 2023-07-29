<?php

session_start();

include("config/config.php");

if (isset($_POST['add_category_btn'])) {
    $name = $_POST["name"];

    $q = $db->prepare("INSERT INTO category (name)VALUES (?)");

    $save_data =  $q->execute([$name]);
    

    if ($save_data) {
        
        $_SESSION['message'] = "Successfully done!";
        header('Location: category.php');
        exit();
    } else {
        $_SESSION['message'] = "Failed to save data!";
        header('Location: add-category.php');
        exit();
    }
}
else if(isset($_POST['edit_category_btn'])){
    $name = $_POST['name'];
    $category_id = $_POST['category_id'];

    $q = $db->prepare("UPDATE category SET name = ? WHERE id = ?");
    $result = $q->execute([$name, $category_id]);

    if($result){
        $_SESSION['message'] = "Editted Succesfully!";
        header("Location: category.php");
        exit();
    }else{
        $_SESSION['message'] = "Editted Succesfully!";
        header("Location: category.php");
        exit();
    }


}
else if (isset($_POST['delete_category_btn'])) {
    $category_id = $_POST['category_id'];

    $q = $db->prepare("DELETE FROM category WHERE id = ?");
    $result = $q->execute([$category_id]);

    if ($result) {
        $_SESSION['message'] = "Successfully Deleted!";
    } else {
        $_SESSION['message'] = "Deletion Failed!";
    }

    header("Location: category.php");
    exit();
}

