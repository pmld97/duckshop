<?php
require ("login/include/connection.php");

$SQL = "SELECT * FROM news";
$result = $connection->query($SQL);
?>
<div class="container">
      <div class="row">
<?php foreach($result as $news){
?>

      <div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="data:image/jpg;base64,<?php echo base64_encode($news["NewsPicture"]);?>" class="card-img-top" alt="..." width="100%">
  <div class="card-body">
    <h5 class="card-title"><?php echo $news["NewsTitle"];?></h5>
    <p class="card-text"><?php echo $news["NewsBody"];?></p>
  </div>
  </div>
</div>
<?php
}
?>
 </div>
</div>