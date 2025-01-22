<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conn_config.php');

if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["title"])){
    $title = $_POST['title'];
    $company = $_POST['company'];
    $date = date("m-d-Y");
    $job_desc = $_POST['job_desc'];
    $status = $_POST['app_status'];
    $man_name = $_POST['manager_name'];
    $manager_linkedin = $_POST['manager_linkedin'];
    $referenced = $_POST['referenced'];
    mysqli_query($conn, "INSERT INTO `applications`(`app_id`, `applicant_id`, `date_applied`, `job_title`, `company`, `hiring_manager`, `hm_li_profile`, `current_status`, `job_link`, `referenced`) VALUES (NULL,'1','$date','$title','$company','$man_name','$manager_linkedin','$status','$job_desc','$referenced')");
  }
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
                    <form action="applications.php" method="POST">
                    <div class="row row-cols-auto bg-dark text-light rounded-1">
                        <div class="col mb-3 rounded-1">
                            <p class="mb-0">Job Title</p>
                            <input class="rounded-2 p-1" type="text" placeholder="example title" name="title" required>
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Company</p>
                            <input class="rounded-2 p-1" type="text" placeholder="example corp" name="company" required>
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Job Description</p>
                            <input class="rounded-2 p-1" type="text" placeholder="job.description.com" name="job_desc" required>
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Application Status</p>
                            <select class="form-select" aria-label="Default select example" name="app_status" required>
                                <option selected>Open this select menu</option>
                                <option value="APP">Applied</option>
                                <option value="AIP">Application In Progress</option>
                                <option value="INT">Interviewing</option>
                                <option value="CON">Being Considered</option>
                                <option value="REJ">Rejected</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Hiring Manager Name</p>
                            <input class="rounded-2 p-1" type="text" placeholder="example corp" name="manager_name">
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Hiring Manager LinkedIn</p>
                            <input class="rounded-2 p-1" type="text" placeholder="example corp" name="manager_linkedin">
                        </div>
                        <div class="col mb-3">
                            <p class="mb-0">Reference Contacted</p>
                            <input class="rounded-2 p-1" type="checkbox" placeholder="example corp" name="referenced">
                        </div>
                        <div class="col-12">
                            <button class="btn blue mb-3" type="submit">Add Application</button>
                        </div>
                    </div>
                    </form>
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