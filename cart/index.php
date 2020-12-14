<?php
//session_start();
require_once("DBController.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
    //start the switch/case
switch($_GET["action"]) {
//adding items to cart
    case "add":
 
        if(!empty($_POST["quantity"])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["code"]=>array(
                'name'=>$productByCode[0]["Name"],
                'code'=>$productByCode[0]["code"],
                'quantity'=>$_POST["quantity"],
                'price'=>$productByCode[0]["Price"]));
            
            if(!empty($_SESSION["cart_item"])) {
                if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($productByCode[0]["code"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
            
        }
    break;
//Remove item from cart
    case "remove":
        if(!empty($_SESSION["cart_item"])) {
            foreach($_SESSION["cart_item"] as $k => $v) {
                    if($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);              
                    if(empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
    break;
    
//Empty the entire cart
    case "empty":
        unset($_SESSION["cart_item"]);
    break;  
}
}
?>
