<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Welcome,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</a>
        </div>
        <div>
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Reset Your Password</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php" >Sign Out of Your Account</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lease Agreement <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Download Lease Agreement</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Submit A New Lease Agreement</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rental Payment <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Payment History</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Payment Method</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wifi <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Get the Code</a></li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Wasts Collection</a></li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Space Allocation <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Bedroom</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Space In Refrigerator</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Space In Bathroom</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Space In Kitchen</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Safety <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >Smoke Alert</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Fire extinguisher</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >Emergency Contact: 911</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact House Owner <b class="caret"></b></a>
                    <ul class="dropdown-menu">


                        <li><a href="reset-password.php" >telephone number</a></li>
                        <li class="divider"></li>
                        <li><a href="reset-password.php" >email</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>

<h1 style="left: 30%;position: absolute">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to 37 Gambier Street.</h1>



</body>
</html>