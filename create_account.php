<?php include('conn_config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    $user = $_REQUEST['username'];
    $pword = $_REQUEST['password'];
    $sql = "INSERT INTO `applicants` (`username`, `password`) VALUES ('$user', '$pword');";
    $exe = mysqli_query($conn, query: $sql);

} 
if(isset($exe)){
    setcookie("loggedin", true, time() + (86400 * 30), "/");
    setcookie("userid", $user, time() + (86400 * 30), "/");
    $msg= "Thanks for signing up, '$user'"; 
    echo "<script>alert('$msg');</script>"; 
    echo "<script>window.location.href = 'applications.php' </script>";
  }
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
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Sign Up Now</h1>
                    <p class="col-lg-10 fs-4">Create an account to compete in the 2025 application competition for a
                        chance at a prestigious dinner at your local Red Robin</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <?php if (isset($msg)) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $msg; ?>
                        </div>
                    <?php }
                    ?>
                    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="create_account.php"
                        method="POST">
                        <div class="form-floating mb-3">
                            <input name="username" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Applicant Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
                        <hr class="my-4">
                        <small class="text-body-secondary">Already have an account? <a href="login.php">Log in
                                Here</a></small>
                    </form>
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
</body>

</html>