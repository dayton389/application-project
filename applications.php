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
       <title>My Applications</title> 
    </head>
<?php include('heading.php')?>
    <div class="container text-center">
        <div class="row">
            <div class="col mx-4 blue">
                <p><b>Total Apps</b></p>
                <p class="h3 text-secondary">--</p>
            </div>
            <div class="col mx-4 blue">
                <p><b>Applications This Week/Month</b></p>
                <p class="h3 text-secondary">--</p>
            </div>
            <div class="col mx-4 blue">
                <p><b>Apps in Progress</b></p>
                <p class="h3 text-secondary">--</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class = "row">
        <div class="col blue mx-4 p-4">
            <h4>Record New Application</h4>
                <div class="container">
                    <div class="row row-cols-auto bg-dark text-light rounded-1">
                        <div class="col">Job Title</div>
                        <div class="col">Company</div>
                        <div class="col">Job Description</div>
                        <div class="col">Application Status</div>
                        <div class="col">Hiring Manager Name</div>
                        <div class="col">Hiring Manager Linked-in</div>
                        <div class="col">Contacted Reference?</div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
        <div class="col blue mx-4 p-4">
            <h4>Applications in Progress</h4>
            <div class="list-group ">
                <div class="list-group-item bg-dark border-dark text-light">
                </div>
            </div>
        </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
        <div class="col blue mx-4 p-4">
            <h4>Applications Waiting on Company</h4>
        </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
        <div class="col blue mx-4 p-4">
            <h4>Application Rejections</h4>
        </div>
        </div>
    </div>
</html>