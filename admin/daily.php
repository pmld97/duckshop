<?php
require 'adminindex.php';
require ("../login/include/connection.php");

?>
<div class="container">
<a href="newdaily.php"  class="btn btn-primary my-2">New Daily</a>
</div>
<?php
$SQL = "SELECT * FROM Daily";
$result = $connection->query($SQL);
?>
<div class="container">
      <div class="row">
<?php foreach($result as $daily){
?>

      <div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="data:image/jpg;base64,<?php echo base64_encode($daily["DailyPicture"]);?>" class="card-img-top" alt="..." width="100%">
  <div class="card-body">
    <h5 class="card-title"><?php echo $daily["DailyName"];?></h5>
    <p class="card-text"><?php echo $daily["DailyBody"];?></p>

  </div>
  </div>
</div>
<?php
}
?>
 </div>
</div>