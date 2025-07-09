<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">				
        <link href="css/styles.css" rel="stylesheet" >
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">
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
                            <a class="nav-link" href="index.php">
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
					<?php echo $_SESSION['username']; ?>
					</div>
                </nav>
            </div>
<div class="container">
    <div class="rounded p-4 d-inline-block" style="background-color: #8D3030; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); margin-top: 80px; margin-left: -60px; border-radius: 15px;">
        <h2 class="text-white font-weight-bold" style="font-size: 2em;">My Profile</h2>
    </div>
    
<div class="row justify-content-center mt-4">
    <div class="col-md-12"> <!-- Changed from col-md-8 to col-md-12 -->
        <div class="card" style="background-color: #fff; border-radius: 15px; width: 100%; height: 480px;"> <!-- Removed fixed height -->
            <div class="card-body d-flex">
                <div class="flex-shrink-0 mr-3">
                    <img src="" id="profile-picture" class="card-img-top" alt="Profile Picture" style="width: 150px; height: 150px; border-radius: 50%;">
                </div>
                 <div class="d-flex flex-column">
                    <h5 class="card-title mb-3" style="font-weight: 600;">John Doe</h5>
                      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="profile-picture-input" class="btn btn-secondary" style="color: #fff;">
            Upload New Picture
            <input type="file" class="d-none" id="profile-picture-input" accept="image/*" name="fileToUpload" onchange="this.form.submit()">
        </label>
    </form>
                </div>
            </div>
            <!-- Inner Card -->
            <div class="card mt-3" style="background-color: #fff; border-radius: 0; border-top: 1px solid #8D3030;">
                 <h5 class="card-title" style="text-align: center; font-weight: 600;">Biodata</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="font-weight-bold">Full Name</p>
                            <p> John Doe </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="font-weight-bold">Email</p>
                            <p> johndoe123@gmail.com </p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p class="font-weight-bold">Phone Number</p>
                            <p> 081455677899 </p><br>
							<button class="btn btn-secondary btn-sm" id="editNameBtn" style="width:100%;">
                    <i class="fa fa-pencil" style="color: #fff;"></i> <span style="color: #fff;">Edit</span>
                </button>
                        </div>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>

              
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function displayPicture(event) {
    const input = event.target;
    const img = document.getElementById('profile-picture');

    const file = input.files[0];
    const reader = new FileReader();

    reader.onload = function() {
        img.src = reader.result;
    }

    reader.readAsDataURL(file);
}
</script>


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
