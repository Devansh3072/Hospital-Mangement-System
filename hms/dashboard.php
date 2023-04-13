<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles1.css">

    <title> patient</title>
</head>

<body>
    <?php include('include/header1.php');?>
    <div class="wrapper">
        <?php include('include/sidebar1.php');?>
        <div class="main" style="flex-grow:8">
            <div class="container text-center">
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle my-4 fw-bold">USER | DASHBOARD</h1>
                        </div>

                    </div>
                </section>
                <div class="row">
  <div class="col-sm-4 mb-3 ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">My Profile</h5>
        <p class="card-text">Show User Profile</p>
        <a href="edit-profile.php" class="btn btn-warning">My Profile</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">My Appointment</h5>
        <p class="card-text">View user's appointments
        </p>
        <a href="appointment-history.php" class="btn btn-warning">View Appointment History</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 mb-3 mb-md-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Book My appointment</h5>
        <p class="card-text">Users can book an appointment</p>
        <a href="book-appointment.php" class="btn btn-warning">Book appointment</a>
      </div>
    </div>
  </div>
    <section id="footer">
        <div class="emerg-footer">
            <marquee behavior="" direction="left">
                <h6>For Any emergency Contact +91-1234-567-899</h6>
            </marquee>
        </div>
        <div class="cpry-footer" <h6>&copy;IWP Project Team</h6>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    
    </script>


</body>

</html>