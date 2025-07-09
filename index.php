<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    echo "Logged in as $username";
} else {
    echo "Not logged in";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Core</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">				
        <link href="css/styles.css" rel="stylesheet" >
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">
			<img src="telkomsel.png" alt="Logo" style="width: auto; height: 30px;">
			</a>

            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!--dropdown user-->
			<div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #880000;">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Performance Core
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Performance GSSN
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Rab Fail
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color: white; font-weight: 600; text-shadow: 2px 2px 4px #000000;">Performance Core</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body" style= "font-weight: 600; color: #fff; font-size: 18px;">
                        SCR MSS (treshold 95%)
						<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 1%; bottom: 3%">
	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
        <div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 35%; bottom: 3%">
        	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
		<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 69%; bottom: 3%">
			 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body" style= "font-weight: 600; color: #fff; font-size: 18px;">
                        CCR MSS (treshold 98.5%)
						<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 1%; bottom: 3%">
	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
        <div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 35%; bottom: 3%">
        	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
		<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 69%; bottom: 3%">
			 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
                    </div>
                </div>
            </div>

           <div class="col-md-6">
    <div class="card mb-3">
        <div class="card-body" style="font-weight: 600; color: #fff; font-size: 18px;">
            4G Combine Attach (treshold 95%)
	 <div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 1%; bottom: 3%">
	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
        <div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 35%; bottom: 3%">
        	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
		<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 69%; bottom: 3%">
			 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
		</div>
    </div>
</div>
			<div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body" style= "font-weight: 600; color: #fff; font-size: 18px;">
                        PDP SR 2G (treshold 99.5%)
						<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 1%; bottom: 3%">
	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
        <div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 35%; bottom: 3%">
        	 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
		<div class="card" style="width: 30%; height: 65%; background-color: #313131; border: none; position: absolute; bottom: 0; left: 69%; bottom: 3%">
			 <div class="card-text" style="color: #13B010; text-align: center; padding-top: 35%; font-size: 15px; font-weight: 7;">percentage</div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
    </body>
</html>

    </body>
</html>
