<!-- <?php
require('inc/essentials.php');
adminLogin();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landlord-Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h-font">HOSTEL HIVE</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid flex-lg-column align-items-stretch">
        <h4 class="navbar-brand" href="#">Landlord Panel</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
          <ul class="nav nav-pills flex-column">
            
            <li class="nav-item">
              <a class="nav-link text-white" href="ldashboard.php">Add property</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="all_property.php">All property details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="student_book _details.php">All booked details</a>
            </li>
           
          </ul>
        </div>
        </div>
    </div>
  </nav>
</div>

 <div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <form class="myForm" action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="roomName" class="form-label">Room Name</label>
                                            <input type="text" class="form-control" id="roomName" name="roomName"  required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roomImage" class="form-label">Room Image</label>
                                            <input type="file" class="form-control" id="roomImage" name="roomImage" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roomPrice" class="form-label">Room Price</label>
                                            <input type="number" class="form-control" id="roomPrice" name="roomPrice" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roomFeatures" class="form-label"> Features</label>
                                            <input type="text" class="form-control" id="roomFeatures" name="roomFeatures" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roomFacilities" class="form-label"> Facilities</label>
                                            <input type="text" class="form-control" id="roomFacilities" name="roomFacilities"  required>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="latitude" class="form-label">Latitude</label>
                                            <input type="text" name="latitude" class="form-control" id="latitude"  required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="longitude" class="form-label">Longitude</label>
                                            <input type="text" name="longitude" class="form-control" id="longitude"  required>
                                        </div>
                                        <button type="submit" class="btn btn-dark"><i class="bi bi-plus-square p-1"></i>Add property</button>
                                    </form>
        </div>
    </div>
 </div>

 <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "hmsdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $roomName = $conn->real_escape_string($_POST['roomName']);
    // Process image upload
    $target_dir = "uploads/";
    
    // Create the directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["roomImage"]["name"]);
    move_uploaded_file($_FILES["roomImage"]["tmp_name"], $target_file);
    $roomImage = $target_file;
    $roomPrice = $conn->real_escape_string($_POST['roomPrice']);
    $roomFeatures = $conn->real_escape_string($_POST['roomFeatures']);
    $roomFacilities = $conn->real_escape_string($_POST['roomFacilities']);
    $latitude = $conn->real_escape_string($_POST['latitude']);
    $longitude = $conn->real_escape_string($_POST['longitude']);
    
    // Insert data into RoomInformation table
    $sql = "INSERT INTO RoomInformation (RoomName, RoomImage, RoomPrice, RoomFeatures, RoomFacilities, Latitude, Longitude) 
            VALUES ('$roomName', '$roomImage', '$roomPrice', '$roomFeatures', '$roomFacilities', '$latitude', '$longitude')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>


<?php require('inc/scripts.php'); ?>
</body>
</html>