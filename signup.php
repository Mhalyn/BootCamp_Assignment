<?php include('css/signup/js/sign_up.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    <link href="css/signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="css/signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="css/signup/https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="css/signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="css/signup/vendor/datepicker/sign_up_daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/signup/css/sign_up.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name" name="first_name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">   
                            <input class="input--style-3" type="number" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Confirm Password" name="password">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="register" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="css/signup/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="css/signup/vendor/select2/select2.min.js"></script>
    <script src="css/signup/vendor/datepicker/sign_up_moment.min.js"></script>
    <script src="css/signup/vendor/datepicker/sign_up_daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="css/signup/js/global.js"></script>
  
   

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
