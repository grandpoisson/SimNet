<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php createRows();?> 
<?php include "includes/header.php";?>

<div class="container">
  <div class="col-sm-6">
    <h1 class="text-center">Create</h1>
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="staffnumber">Staff Number</label>
        <input type="text"name="staffnumber" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Firstvname</label>
        <input type="text"name="firstname" class="form-control">
      </div>
      <div class="form-group">
        <label for="username">Lastvname</label>
        <input type="text"name="lastname" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="form-group">
        <label for="pmtadmin">PMT Admin</label>
        <input type="checkbox" name="pmtadmin" class="form-control">
      </div>
      <div class="form-group">
        <label for="qtgvalidator">QTG Validator</label>
        <input type="checkbox" name="qtgvalidator" class="form-control">
      </div>
      <input class="btn btn-primary"  type="submit" name ="submit" value="Create"  >
    </form>
  </div>
</div>
 
<?php include "includes/footer.php"?>