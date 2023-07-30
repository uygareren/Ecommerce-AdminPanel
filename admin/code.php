<?php

session_start();

include("config/config.php");

if (isset($_POST['add_category_btn'])) {
    $name = $_POST["name"];
    $slug = strtolower($name);

    $q = $db->prepare("INSERT INTO category (name, slug) VALUES (?,?)");

    $save_data =  $q->execute([$name, $slug]);
    

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
} else if(isset($_POST['add_product_btn'])){
    $category_id = $_POST["category_id"];
    $name = $_POST["name"];
    $smallDescription = $_POST["small_description"];
    $description = $_POST["description"];
    $originalPrice = $_POST["original_price"];
    $sellingPrice = $_POST["selling_price"];
   
    $quantity = $_POST["quantity"];
    $status = isset($_POST["status"]) ? $_POST["status"] : "0";
    $trending = isset($_POST["trending"]) ? $_POST["trending"] : "0";
    $metaTitle = $_POST["meta_title"];
    $metaDescription = $_POST["meta_description"];
    $metaKeywords = $_POST["meta_keywords"];

    

    $image = $_FILES['image']['name'];
    $path = "../uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().".".$image_ext;
    
    $product_query = "INSERT INTO product(category_id, name, small_description, description, original_price, selling_price, image, quantity, status, trending, meta_title, meta_description, meta_keywords) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $q = $db -> prepare($product_query);
    $result = $q->execute([$category_id, $name, $smallDescription, $description, $originalPrice, $sellingPrice, $filename, $quantity, $status, $trending, $metaTitle, $metaDescription, $metaKeywords]);

    if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path."/".$filename);
        $_SESSION['message'] = "Succesfully Added!";
        header("Location: product.php");
        exit();
    } else {
        $_SESSION['message'] = "Not Added!";
        header("Location: add-product.php");
        exit();
    }
}else if(isset($_POST['edit_product_btn'])){
    $category_id = $_POST['category_id'];
    $id = $_POST['product_id']; // Assuming the product id is in a field named "product_id"

    $name = $_POST['name'];
    $smallDescription = $_POST['small_description'];
    $description = $_POST['description'];
    $originalPrice = $_POST['original_price'];
    $sellingPrice = $_POST['selling_price'];
    $quantity = $_POST['quantity'];
    $status = isset($_POST['status']) ? 1 : 0; // Assuming status is a checkbox
    $trending = isset($_POST['trending']) ? 1 : 0; // Assuming trending is a checkbox
    $meta_title = $_POST['meta_title'];
    $meta_keywords = $_POST['meta_keywords'];
    $meta_description = $_POST['meta_description'];

    $path = "../uploads";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image']; // Assuming the old image filename is passed via a hidden input named "old_image"
    

    if($new_image != ""){
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().".".$image_ext; 
    } else {
        $update_filename = $old_image;
    }
    

    $q = $db->prepare("UPDATE product SET category_id=?, name=?, small_description=?, description=?, original_price=?, selling_price=?, image=?, quantity=?, 
    status=?, trending=?, meta_title=?, meta_description=?, meta_keywords=? WHERE id=?");

    $result = $q->execute([$category_id, $name, $smallDescription, $description, $originalPrice, $sellingPrice, $update_filename, $quantity,
    $status, $trending, $meta_title, $meta_description, $meta_keywords, $id]);

    if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . "/" . $update_filename);
        if (file_exists($path ."/". $old_image)) {
            unlink($path ."/". $old_image);
        }
        $_SESSION['message'] = "Successfully Updated!";
        header("Location: product.php");
        exit();
    } else {
        $_SESSION['message'] = "Update Failed!";
        header("Location: edit-product.php?id=$id");
        exit();
    }
}else if(isset($_POST['delete_product_btn'])){

    $product_id = $_POST['product_id'];
    echo $product_id;

    $q = $db->prepare("DELETE FROM product WHERE id = ?");
    $result = $q->execute([$product_id]);

    if ($result) {
        $_SESSION['message'] = "Successfully Deleted!";
        header("Location: product.php");
        exit();
    } else {
        $_SESSION['message'] = "Deletion Failed!";
        header("Location: product.php");
        exit();
    }


}


