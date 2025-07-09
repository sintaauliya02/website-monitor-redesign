<?php
include 'connect.php';

if (isset($_POST['btn-login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (empty($username) || empty($password)) {
        $error_message = "Both username and password are required.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM userdata WHERE username='$username' AND password='$password';");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        var_dump($result);

        if ($result->num_rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Invalid username or password";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style-login.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #D2B48C; /* Nude brownish color */
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #FFFFFF; /* White color */
        }

        .overlay {
            background-color: #FFFFFF; /* White color */
            border-radius: 32px;
            padding: 40px; /* Adjust the padding as needed */
			width: 600px;
			height: 400px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
			position: fixed;
			top: 50%;
			left: 50%;

        }
		
			
    </style>
</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-light">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">
			<img src="telkomsel.png" alt="Logo" style="width: auto; height: 30px;">
			</a>
			</nav>

    <div class="overlay">
    <h2 style="font-family: 'Poppins'; margin-top: -10px; font-weight: 800;">WEB NETWORK.</h2>
    <p style="margin-top: -10px;"> Enter your account details below</p>
<form action="index.php" method="post" onsubmit="return validateForm()">
    <input type="text" class="invisible-border-input" name="username" id="username" placeholder="Username"><br>
    <input type="password" class="invisible-border-input" name="password" id="password" placeholder="Password"><br><br><br>
    <input type="submit" value="Login" class="login-button" name="btn-login">
</form>
<script>
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Both username and password are required.");
        return false;
    }

    return true; // Submit the form if validation passes
}
</script>

</div>
</body>
</html>
