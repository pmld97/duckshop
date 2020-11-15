<?php
require 'adminindex.php';
require ("../login/include/connection.php");
?>

<div class="container">
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-3">
      <label>Name</label>
      <input name="name" type="text" class="form-control" placeholder="Name">    
    </div>
    <div class="col-7">
    <label>Description</label>
      <input name="description" type="text" class="form-control" placeholder="Description">
    </div>
    <div class="col">
    <label>Price</label>
      <input name="price" type="text" class="form-control">
    </div>
    <input type="file" name="image">
  </div>
  <button name="submit" type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
</form>
</div>
</div>

<?php



if (isset($_POST['submit'])) {

$productName = strip_tags($_POST['name']);
$productDescription = strip_tags($_POST['description']);
$productPrice = strip_tags($_POST['price']);
$productPhoto=$_FILES["image"];
$productPhoto = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  $query = $connection->prepare("INSERT INTO products (`Name`, `Description`, `Price`, `Photo`) VALUES ('$productName', '$productDescription', '$productPrice', '$productPhoto')");
  $query->execute();
}