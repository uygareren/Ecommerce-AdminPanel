<?php
include_once("functions/userfunctions.php");
?>

<div class="row">
    <?php
    if (isset($_GET['category'])) {
        $category_slug = $_GET['category'];
        $category = getIdBySlug("category", $category_slug);

        $category_id = $category['id'];

        $products = getProductByCategoryId('product', $category_id);
        foreach ($products as $product) {
            $product_name = $product['name'];
            $product_original_price = $product['original_price'];
           
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="product-detail.php?id=<?php echo $product['id'] ?>">
                        <div class="img-box">
                            <img src=<?php echo "uploads/".$product['image'] ?> alt="">
                        </div>
                        <div class="detail-box">
                            <h6><?php echo $product_name; ?></h6>
                            <h6>
                                Price
                                <span>
                                    $<?php echo $product_original_price; ?>
                                </span>
                            </h6>
                        </div>
                        <div class="process-box">
                            <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                        <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                        <span class="quantity-value">1</span>
                                        <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </a>
                </div>
            </div>
            <?php
        }
    } else {
        $products = getAllData('product');
        
        foreach ($products as $product) {
            
           
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <a href="product-detail.php?id=<?php echo $product['id'] ?>">
                        <div class="img-box">
                            <img src=<?php echo "uploads/".$product['image'] ?> alt="">
                        </div>
                        <div class="detail-box">
                            <h6><?php echo $product['name']; ?></h6>
                            <h6>
                                Price
                                <span>
                                    $<?php echo $product['original_price']; ?>
                                </span>
                            </h6>
                        </div>
                        <div class="process-box">
                            <div class="button-quantity-container">
                                <button type="button" class="btn btn-outline-success">+ Add to Cart</button>
                                <div class="quantity-box">
                                    <div class="quantity-control">
                                        <button class="quantity-btn" onclick="decreaseQuantity(event)">-</button>
                                        <span class="quantity-value">1</span>
                                        <button class="quantity-btn" onclick="increaseQuantity(event)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </a>
                </div>
            </div>
        <?php
        }
    }
    ?>
</div>