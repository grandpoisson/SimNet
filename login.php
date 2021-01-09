
<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php";?>

<div class="container">
  <div class="col-sm-6">
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="staffnumber">Staff Number</label>
        <input type="text" name="staffnumber" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <input class="btn btn-primary"  type="submit" name ="submit" value="Submit"  >
    </form>
  </div>
</div> 
<?php include "includes/footer.php"?>