<?php
require 'adminindex.php';
require ("../login/include/connection.php");
$SQL = "SELECT * FROM products";
$result = $connection->query($SQL);


?>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
       <?php foreach($result as $things){?>
       <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <image src="data:image/jpg;base64,<?php echo base64_encode($things["Photo"]);?>" width="100%">
            <div class="card-body">
            <h5><?php echo $things["Name"];?></h5>
              <p class="card-text"><?php echo $things["Description"];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="edit.php?id=<?php echo $things['ID']; ?>"><btn class="btn btn-outline-warning">Edit</btn></a>
                <a href="delete.php?id=<?php echo $things['ID']; ?>"><btn class="btn btn-outline-danger">Delete</btn></a>
                </div>
                <small class="text-muted"><?php echo $things["Price"];?> DKK</small>
              </div>
            </div>
          </div>
        </div>
            <?php } ?>
    </div>
    </div>
    </div>