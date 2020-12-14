<?php 
require "cart/index.php";
include "header.php";
 
?>
 
<div class="container">
 
    <div class="row">
 
        <div class="col">
            <div class="row">
 
                <?php     $product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY ID ASC");
    if (!empty($product_array)) { 
        foreach($product_array as $aNumber=> $value){
    ?>
                <div class="col-12 col-md-6 col-lg-3" >
                    <div class="card">
                        <form method="post"
                            action="index.php?action=add&code=<?php echo $product_array[$aNumber]["code"]; ?>">
                            <img class="card-img-top"
                                src="data:image/jpeg;base64,<?php echo base64_encode($product_array[$aNumber]["Photo"]); ?> " class="img-thumbnail">
                            <div class="card-body">
                                <h4 class="card-title"><a href="product.html" title="View Product">
                                        <?php echo $product_array[$aNumber]["Name"]; ?>
                                    </a></h4>
                                <p class="card-text">
                                    <?php echo $product_array[$aNumber]["Description"]; ?>
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <p class="">
                                            <?php echo $product_array[$aNumber]["Price"]." DKK"; ?></p>
                                    </div>
                                </div>
                                    <div class="row" >
                                    <div class="col">
                                        <div>
                                            <input type="number" name="quantity" value="1" size="2" min="1" max="20" />
                                            <input type="submit" value="Add to cart" class="addBtn btn btn-outline-success float-right" /></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
 
                </div>
                <?php 
}
 }?>
 
            </div>
        </div>
    </div>
</div>
</div>
</div>
 
</div>
</div>
