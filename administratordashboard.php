<html>
<head>
    <title> Administrator Dashboard</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="cstyle/cs.css">
    <script src="bootstrap4/js/jquery-3.6.0.js"></script>
    <script src="bootstrap4/js/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" class="logo" width="100" height="50"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- Links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="inquiry.php">Enquiry</a>
            </li> <li class="nav-item">
                <a class="nav-link" href="Registration.php">Register</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="receipt.php">receipt</a>
            </li>


            <li class="nav-item dropdown">
                <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                   style="border: 2px solid black; border-radius: 15px;color: white">
                    Report
                </a>
                <div class="dropdown-menu" style="background: skyblue">
                    <a class="dropdown-item" href="Reportenquiry.php"
                       style="background: yellow;border: 2px solid black;border-radius: 15px">Enquiries Report by Date</a>
                    <a class="dropdown-item" href="Reportreg.php"
                       style="background: yellow;border: 2px solid black;border-radius: 15px">Registrations Report by Dates </a>




                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="heading">
    <h4 class="text-center">administrator dashboard</h4>
    <img src="images/sa.jpg" alt="" width="1500" height="500">

</div>
</body>
</html>
