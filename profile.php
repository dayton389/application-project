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

</head>
<?php include('heading.php')?>
  <body class="container row">
    <div class="col blue mx-3 text-center">
      profile
    </div>
  </body>
</html>