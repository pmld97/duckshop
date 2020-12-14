<?php
require 'adminindex.php';
require ("../login/include/connection.php");
?>

<div class="container">
  <h3>You're adding a new daily offer!</h3>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-3">
      <label>Name</label>
      <input name="name" type="text" class="form-control" placeholder="Name">    
    </div>
    <div class="col-7">
    <label>Body</label>
      <input name="description" type="text" class="form-control" placeholder="Description">
    </div>
    <input type="file" name="image">
  </div>
  <button name="submit" type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
</form>
</div>
</div>

<?php



if (isset($_POST['submit'])) {

$DailyName = strip_tags($_POST['name']);
$DailyBody = strip_tags($_POST['description']);
$DailyPicture=$_FILES["image"];
$DailyPicture = addslashes(file_get_contents($_FILES['image']['tmp_name']));

  $query = $connection->prepare("INSERT INTO daily (`DailyName`, `DailyBody`, `DailyPicture`) VALUES ('$DailyName', '$DailyBody', '$DailyPicture')");
  $query->execute();
}