<?php
include('conn_config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$e = NULL;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
  // Get and sanitize user input
  $inputUsername = trim($_POST['username']);
  $inputPassword = trim($_POST['password']);

  // Use a prepared statement to prevent SQL injection
  $stmt = $conn->prepare("SELECT applicant_id, username, password FROM applicants WHERE username = ?");
  $stmt->bind_param("s", $inputUsername);
  $stmt->execute();
  $result = $stmt->get_result();

  // Check if the user exists in the database
  if ($result && $result->num_rows > 0) {
      // Fetch user data
      $userData = $result->fetch_assoc();

      // Verify the password
      if (password_verify($inputPassword, $userData['password'])) {
          // Set cookies securely using the user ID and username
          setcookie("loggedin", true, time() + (86400 * 30), "/", "", true, true); // Secure and HttpOnly
          setcookie("userid", $userData['applicant_id'], time() + (86400 * 30), "/", "", true, true); // Secure and HttpOnly

          // Redirect the user after successful login
          $msg = "Welcome back, " . htmlspecialchars($userData['username']);
          echo "<script>alert('$msg');</script>";
          echo "<script>window.location.href = 'applications.php';</script>";
          exit;
      } else {
          // Incorrect password
          $e = "Invalid username or password";
      }
  } else {
      // Username not found
      $e = "Invalid username or password";
  }

  // Close the prepared statement
  $stmt->close();
}
// if (isset($exe)) {
//   setcookie("loggedin", true, time() + (86400 * 30), "/");
//   setcookie("userid", $user, time() + (86400 * 30), "/");
//   $msg = "Thanks for signing up, '$user'";
//   echo "<script>alert('$msg');</script>";
//   echo "<script>window.location.href = 'applications.php' </script>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Application Competition</title>
  <?php include('heading.php'); ?>

</head>

<body>
  <main id="main">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5 blue rounded-3">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Welcome back, Log in</h1>
          <p class="col-lg-10 fs-4">Log in to compete in the 2025 application competition for a
            chance at a prestigious dinner at your local Red Robin</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <?php if (isset($msg)) { ?>
            <div class="alert alert-warning" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php }
          ?>
          <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="login.php" method="POST">
            <div class="form-floating mb-3">
              <input name="username" class="form-control" id="username" placeholder="name@example.com">
              <label for="username">Applicant Name</label>
            </div>
            <div class="form-floating mb-3">
              <input name="password" class="form-control" id="password" placeholder="name@example.com">
              <label for="password">Password</label>
            </div>
            <?php if (isset($e)) { ?>
              <p style="color:red;"><?php echo $e; ?></p>
            <?php } ?>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            <hr class="my-4">
            <small class="text-body-secondary">Don't have an account? <a href="create_account.php">Create Account
                Here</a></small>
          </form>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
</body>

</html>