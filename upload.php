<?php
session_start();

include 'connect.php'; // Make sure to include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/"; // Directory where uploaded files will be stored
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // Full path of the uploaded file

    // Check if the file is an actual image or a fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // Allow only certain file types (adjust this as needed)
        $allowed_types = array("jpg", "jpeg", "png", "gif");
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($file_type, $allowed_types)) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // File uploaded successfully, update profile picture path in the database
                $username = $_SESSION['username'];
                $profile_picture_path = basename($_FILES["fileToUpload"]["name"]);
                
                // Update the database with the new profile picture path
                $stmt = $conn->prepare("UPDATE userdata SET profile_picture=? WHERE username=?");
                $stmt->bind_param("ss", $profile_picture, $username);
                $stmt->execute();
                
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded and profile picture updated.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "File is not an image.";
    }
}
?>
