<?php
 
require "header.php";
    require "cart/index.php";
 
?>
 
<main>
    <div class="pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">My cart</div>
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
 
                                <?php
if (isset($_SESSION["cart_item"])) {
    $item_total = 0;
    foreach ($_SESSION["cart_item"] as $item) { 
        ?>
 
                                <tr>
                                    <th scope="col" class="border-0">
                                        <div class="p-2 px-3 text-uppercase"><?php echo $item["name"]; ?></div>
                                    </th>
                                    <th scope="col" class="border-0">
                                        <div class="py-2 text-uppercase"><?php echo $item["price"] . " DKK"; ?></div>
                                    </th>
                                    <th scope="col" class="border-0">
                                        <div class="py-2 text-uppercase"><?php echo $item["quantity"]; ?></div>
                                    </th>
                                    <th scope="col" class="border-0">
                                        <div class="py-2 text-uppercase"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="removeBtn">Remove</a></div>
                                    </th>
                                </tr>
 
                                <?php
$item_total += ($item["price"] * $item["quantity"]);
    }
    ?>
 
                            </thead>
                            <tr>
                                <div class="container-fluid">
                                    <div class="row px-5">
                                        <div class="col-md-7">
                                            <div class="shopping-cart">
                                                <div id="shopping-cart">
                                                    <table cellpadding="10" cellspacing="1">
                                                    </table>
                                                    <?php
}
?>
                                                </div>
                                            </div>
                                        </div>
 
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="row p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary
                        </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you
                                have entered.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Order Subtotal </strong><strong>
                                        <?php echo $item_total . " DKK"; ?></strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Shipping and handling</strong><strong>FREE</strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Total</strong>
                                    <h5 class="font-weight-bold">DKK <?php echo $item_total . " DKK"; ?></h5>
                                </li>
                            </ul><a href="checkout.php" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </div>
</main>
