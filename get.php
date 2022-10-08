<?php

    include('./partials/header.php');

    // $product_id = $_GET['productid'];
    $category = $_GET['category'];
    $limit = $_GET['limit'];

    $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

    // if($category == false || $limit == false){
    //     die();
    // }

    if($category == false){
        $category = 1;
    }

    if($limit == false){
        $limit = 10;
    }

?>
    <div class="container">
            <!-- Hello -->
        The Limit is <?= $limit ?> and it's category is <?= $category ?>.
        <!-- <?= $product_id; ?> -->
    </div>
    
<?php 
    include('./partials/footer.php')
?>