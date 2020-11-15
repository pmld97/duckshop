<?php
require ("../login/include/connection.php");
$ID = $_GET["id"];
$SQL = "SELECT * FROM products WHERE ID = $ID";
$result = $connection->query($SQL);
$details = $result->fetch(PDO::FETCH_ASSOC);
?>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></head>
<div class="container">
<h1>You are now editing product with ID <?php echo $ID ?></h1>
<form action="" method="post">
  <div class="form-row">
    <div class="col-3">
      <label><?php echo $details["Name"];?></label>
      <input name="name" value="<?php echo $details["Name"];?>" type="text" class="form-control" placeholder="Name">    
    </div>
    <div class="col-7">
    <label><?php echo $details["Description"];?></label>
      <input name="description" value="<?php echo $details["Description"];?>" type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
    <label><?php echo $details["Price"];?></label>
      <input name="price" value="<?php echo $details["Price"];?>" type="text" class="form-control" placeholder="Price">
    </div>
  </div>
  <button name="edit" type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
</form>
</div>

<?php

//Update
if (isset($_POST['edit'])) {
    $productName = strip_tags($_POST['name']);
    $description = strip_tags($_POST['description']);
    $price = strip_tags($_POST['price']);

    $query = $connection->prepare("UPDATE products SET `Name`='$productName', `Price`='$price', `Description`='$description' WHERE ID = $ID");
    $query->execute();
    header("location:manage.php");

}

