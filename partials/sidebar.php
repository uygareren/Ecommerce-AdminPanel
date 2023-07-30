<?php

include_once("functions/userfunctions.php");
?>

<div class="sidebar" id="sidebar" style="width: 1000px;">
    <h2 class="categories">CATEGORIES</h2>
    <div class="list">
    <div class="col-4">
        <?php
        $categories = getAllData("category");
        
        if (count($categories) > 0) {
            // Veri varsa tabloya yazdır
            echo '<div class="list-group" role="tablist">';
            foreach ($categories as $category) {
                $categoryId = $category['id']; // Assuming the 'id' is the primary key in the 'category' table
                $categoryName = $category['name'];
        ?>
            
            <a href=<?php echo "shop.php?category=".$category['slug']; ?> class="list-group-item" id="<?php echo $categoryId; ?>"  >
                <?php echo $categoryName; ?>
            </a>
                
        <?php
            }
            echo '</div>';
        } else {
            // Veri yoksa uyarı mesajını tabloya yazdır
            echo '<p>No data available!</p>';
        }
        ?>
    </div>
    </div>
</div>
