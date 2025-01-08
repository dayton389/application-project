<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/* 
define('DBHOST', 'localhost');
define('DBNAME', 'name here');
define('DBUSER', 'root');
define('DBPASS', '');
//define('DBCONNSTRING','sqlite:./art.db');
define('DBCONNSTRING',"mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8mb4;");
 */
$server = "localhost";
$db = "ap";
$username = 'root';
$password = "";
$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
    die("Connection Failed".mysqli_connect_errors());
}

// function genQuery($qry) {
//     $result = mysqli_query($conn, $qry);
//     if (mysqli_num_rows($result) > 0) {

//     }
// }

if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $sql = mysqli_query($conn, "DELETE FROM articles WHERE id = '$delid'");
  echo "<script>alert('Data deleted successfully');</script>";
  echo "<script>window.location.href = 'index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"><title>Document</title>
  <style>
    /* Add background image to the body */
    body {
      background-image: url('https://wallpapers.com/images/featured/dark-abstract-bsid6neh0qavpfd1.jpg'); /* Replace with your image URL */
      background-size: cover; /* Ensure the image covers the entire screen */
      background-position: center; /* Center the image */
      background-repeat: no-repeat; /* Prevent the image from repeating */
      height: 100vh; /* Make the body take the full viewport height */
    }

    .container {
      width: 80vw;
    }
    .blue {
      background-color: #5191b3 !important; /* Your desired color */
    }
  </style>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg blue">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Application Competition Jan 2025</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

</body>
</html>