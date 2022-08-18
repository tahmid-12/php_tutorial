<?php

    include('./partials/header.php');

    // $product_id = $_GET['productid'];
    // $category = $_GET['category'];
    // $limit = $_GET['limit'];

    $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

    if($category == false || $limit == false){
        die();
    }

?>
    <div class="container">
            <!-- Hello -->
        The Limit is <?= $limit ?> and it's category is <?= $category ?>.
    </div>
    
<?php 
    include('./partials/footer.php')
?>