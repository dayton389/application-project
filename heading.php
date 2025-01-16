<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
  <style>
    /* Add background image to the body */
    .custom-bg {
      background-image: url('https://wallpapers.com/images/featured/dark-abstract-bsid6neh0qavpfd1.jpg');
      /* Replace with your image URL */
      background-size: cover;
      /* Ensure the image covers the entire screen */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Prevent the image from repeating */
      height: 100vh;
      /* Make the body take the full viewport height */
    }


    .blue {
      background-color: #5191b3 !important;
      /* Your desired color */
    }
  </style>
</head>

<body class="custom-bg">
  <nav class="navbar navbar-expand-md blue">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Application Competition Jan 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="create_account.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="applications.php">My Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="competitions.php">Competitions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <?php if (isset($_COOKIE['loggedin'])) { ?>
            <li class="nav-item">
              <form action="signout.php" method="POST">
                <button type="submit">Log Out</button>
              </form>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  </div>

</body>
<br>