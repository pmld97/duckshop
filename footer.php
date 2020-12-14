
<footer class="footer">
      <div class="container bottom_border">
      <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
      <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
      <p><i class="fa fa-location-arrow"></i>
      <?php
require ("login/include/connection.php");
      $SQL = "SELECT CompanyAddress FROM company";
      $result = $connection->query($SQL);
      foreach($result as $row){
      echo $row['CompanyAddress'];
      }
?>
    </p>
      <p><i class="fa fa-phone"></i>
       <?php
      $SQL = "SELECT CompanyNumber FROM company";
      $result = $connection->query($SQL);
      foreach($result as $row){
      echo $row['CompanyNumber'];
      }
       ?>
      </p>
      </div>
      </div>
      </div>
      
    
    </footer>