<?php
include "header.php";
include "functions/error.php";
?>

<form method="post" action="functions/sendmail.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="name" aria-describedby="name">
  </div>
  <div class="form-group">
    <label for="Name">Message:</label>
    <textarea type="text" class="form-control" name="message" aria-describedby="message" rows="8"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

