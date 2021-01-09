<?php include "db.php"; ?>
<?php

function createRows(){   
    if (isset($_POST['submit'])) {
        global $connection;
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $pmtadmin = $_POST['pmtadmin'];
        $qtgvalidator = $_POST['qtgvalidator'];
        //Use the below mysqli function to help prevent SQL Injection 
        $firstname = mysqli_real_escape_string($connection, $firstname);
        $lastname = mysqli_real_escape_string($connection, $lastname);
        $password = mysqli_real_escape_string($connection, $password);
        $pmtadmin = mysqli_real_escape_string($connection, $pmtadmin);
        $qtgvalidator = mysqli_real_escape_string($connection, $qtgvalidator);

        //Password encryption
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22"; //22 char length string
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);

        $query = "INSERT INTO tblengusers(firstname, lastname, password, pmtadmin, qtgvalidator) ";
        $query .= "VALUES ('$firstname', '$lastname', '$password', '$pmtadmin', '$qtgvalidator') ";
        $result = mysqli_query($connection, $query);
        if(!$result) {
          die('Query failed' . mysqli_error($connection));
        }
    }
}
function readRows(){
    global $connection;
    $query = "SELECT * FROM tblengusers";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query failed' . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}
function showAllData() {
    global $connection;
      $query = "SELECT * FROM tblengusers";
      $result = mysqli_query($connection, $query);
      if(!$result) {
          die("Query failed" . mysqli_error($connection));
      }
      while($row = mysqli_fetch_assoc($result)) {
        $userid = $row['userID'];
        echo "<option value='$userid'>$userid</option>";
    }
}
function updateTable() {
    if(isset($_POST['submit'])){
        global $connection;
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        //Use the below mysqli function to help prevent SQL Injection 
        $firstname = mysqli_real_escape_string($connection, $firstname);
        $lastname = mysqli_real_escape_string($connection, $lastname);
        $password = mysqli_real_escape_string($connection, $password);
        $userid = $_POST['userID'];
        $query = "UPDATE tblengusers SET ";
        $query .= "firstname = '$firstname', ";
        $query .= "lastname = '$lastname', ";
        $query .= "password = '$password' ";
        $query .= "WHERE userID = $userid ";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed" . mysqli_error($connection));
        }
    }
}
function deleteRows() {
    if(isset($_POST['submit'])){
        global $connection;
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $userid = $_POST['userid'];
        $query = "DELETE FROM tblengusers ";
        $query .= "WHERE userID = $userid ";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed" . mysqli_error($connection));
        }
    }        
}
?>