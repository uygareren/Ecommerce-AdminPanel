<?php
include("functions/userfunctions.php");
?>

<div class="sidebar" id="sidebar" style="width: 1000px;">
    <h2 class="categories">CATEGORIES</h2>
    <div class="list">
        <div class="col-4">

            <?php
            $categories = getAll("category");

            if (count($categories) > 0) {
                // Veri varsa tabloya yazdır
                echo '<div class="list-group" id="list-tab" role="tablist">';
                foreach ($categories as $category) {
                    $categoryId = $category['id']; // Assuming the 'id' is the primary key in the 'category' table
                    $categoryName = $category['name'];
            ?>

                    <a class="list-group-item list-group-item-action" id="<?php echo $categoryId; ?>" data-bs-toggle="list" href="#list-category-<?php echo $categoryId; ?>" role="tab" aria-controls="list-category-<?php echo $categoryName; ?>">
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
