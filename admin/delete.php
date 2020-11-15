<?php
require 'adminindex.php';
require ("../login/include/connection.php");
$ID = $_GET["id"];
$SQL = "SELECT * FROM products WHERE ID = $ID";
$result = $connection->query($SQL);
$details = $result->fetch(PDO::FETCH_ASSOC);
?>
<div class="container text-center">
<h1>Are you sure you wanna delete <?php echo $details['Name']?>?</h1>
<form method="post">
<button name="yes" type="submit">Yes</button>
<button>Nooooo</button>
</form>
</div>

<?php
if(isset($_POST ['yes'])){
    $query = $connection->prepare("DELETE FROM products WHERE ID = $ID");
    $query->execute();
    header("location:manage.php");
}