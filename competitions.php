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
        <title>Competitions</title>
    </head>
<?php include('heading.php')?>
  <div class="container">
    <div class="row text-center">
        <span class="text-light">My Competitions</span>
        <div class="col blue m-4 p-2 text-center">
            <h3>*Competition Name*</h3>
            <div class="row my-2 text-start">
                <div class="col">
                    <h4>Calendar</h4>
                </div>
                <div class="col">
                    <div class="row text-center justify-content-center">
                        <h4>Goal</h4>
                        <div class="col">
                            <div class="progress p-0 m-0 w-100 border border-dark" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="40">
                                <div class="progress-bar" style="width:25%">10 of 40</div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <h4>Incentive</h4>
                        <p>Red Robin</p>
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col text-start">
                    <h4>Participants</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</html>