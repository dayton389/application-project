<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application Competition</title>
  <?php include('heading.php')?>
</head>
<body>
<main id="main">    
  <div class="container col-xl-10 col-xxl-8 px-4 py-5 blue rounded-3">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Sign Up Now</h1>
        <p class="col-lg-10 fs-4">Create an account to compete in the 2025 application competition for a chance at a prestigious dinner at your local Red Robin</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
      <?php if (isset($msg)) { ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $msg; ?>
        </div>
      <?php } 
      ?>

          <?php if (isset($_REQUEST["applicant_id"]) && $_REQUEST["applicant_id"]) {
            $teamid = $_REQUEST['applicant_id'];
            
            if (isset($_REQUEST["coach"]) && $_REQUEST["coach"] == "true") {
              $coach = $_REQUEST["coach"];
              $action = "sign-up.php?coach=$coach&teamid=$teamid";
            } else {
              $action = "sign-up.php?teamid=$teamid";
            }
            ?>
            <h4><?php 
              $teamname = mysqli_fetch_assoc(mysqli_query($conn, "SELECT teamname FROM `Team` WHERE teamid = $teamid;"))['teamname'];
              echo "Welcome to ".$teamname." Football";
              ?></h4>
              <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action = "<?php echo $action;?>" method = "POST">
              <input name = "" type='hidden' value="<?php echo $teamname?>">
          <?php } else {?>
          <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action = "login.php" method = "POST">
          <div class="form-floating mb-3">
            <input name = "username" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Applicant Name</label>
            
          </div>
          <?php }?>
          <div class="form-floating mb-3">
            <input name="password" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Password</label>
          </div>
          <!-- <div class="form-floating mb-3">
            <input name = "username" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Username</label>
          </div> -->
          <!-- <div class="form-floating mb-3">
            <input name = "acctnm" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Account Name</label>
          </div> -->
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
          <hr class="my-4">
          <small class="text-body-secondary">Already have an account? <a href="login.php">Log in Here</a></small>
        </form>
        <p><?php echo $_REQUEST['username'];?></p>
      </div>
    </div>
  </div>
  </main><!-- End #main --> 
</body>
</html>

