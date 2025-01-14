<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include('conn_config.php');
/* 
define('DBHOST',, 'name here');
define('DBUSER' 'localhost');
define('DBNAME', 'root');
define('DBPASS', '');
//define('DBCONNSTRING','sqlite:./art.db');
define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4;");
 */


// function genQuery($qry) {
//     $result = mysqli_query($conn, $qry);
//     if (mysqli_num_rows($result) > 0) {

//     }
// }

/* if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $sql = mysqli_query($conn, "DELETE FROM articles WHERE id = '$delid'");
  echo "<script>alert('Data deleted successfully');</script>";
  echo "<script>window.location.href = 'index.php'</script>";
} */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Application Competition</title>
  </head>
<?php include('heading.php')?>
  <div class="container">
    <div class="row">
      <div class="col-7 blue m-4 p-2">
        <h3>Login</h3>
      <div class="col-7 blue m-4 p-2">
        <h3>Competitions</h3>
      </div>
      <div class="col blue m-4 p-2">
        <h3>My Applications</h3>
      </div>
    </div>
    <div class="row">
      <div class="col blue m-4 p-2">
        <h3>Job Boards</h3>
      </div>
    </div>
  </div>
</html>