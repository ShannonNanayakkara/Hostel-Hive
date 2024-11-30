<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warden Dashboard</title>
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
        <div class="container">
    <div class="row">

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
    
    // Check if the form was submitted for cancellation or acceptance
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['accept'])) {
            // Accept action
            $roomId = $_POST['roomId'];
            // Update booking status to 'booked'
            $sql = "UPDATE RoomInformation SET booking_status = 'booked' WHERE RoomID = ?";
        } elseif (isset($_POST['cancel'])) {
            // Cancel action
            $roomId = $_POST['roomId'];
            // Update booking status to 'available'
            $sql = "UPDATE RoomInformation SET booking_status = 'available' WHERE RoomID = ?";
        }
      
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $roomId);
            
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                if (isset($_POST['accept'])) {
                    echo "<script>alert('Room accepted and booked successfully.');</script>";
                } elseif (isset($_POST['cancel'])) {
                    echo "<script>alert('Booking request canceled successfully.');</script>";
                }
            } else {
                echo "<script>alert('Error processing the request.');</script>";
            }
            
            // Close statement
            $stmt->close();
        } else {
            echo "<script>alert('Error preparing statement.');</script>";
        }
    }

    // Fetch room data from the database
    $sql = "SELECT * FROM RoomInformation WHERE booking_status = 'pending' ";
    $result = $conn->query($sql);

    // Check if there are any rooms available
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
?>
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images\11.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3"><?php echo $row['RoomName']; ?></h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $row['RoomFeatures']; ?></span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge bg-light text-dark text-wrap lh-base"><?php echo $row['RoomFacilities']; ?></span>
                            </div>
                            <div class="gender mb-3">
                                <h6 class="mb-1">Price</h6>
                                <span class="badge rounded-pill bg-light">
                                    <span class="badge bg-light text-dark text-wrap lh-base">Rs.<?php echo $row['RoomPrice']; ?> per month</span>
                                </span>
                            </div>
                            <!-- Accept Button -->
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <input type="hidden" name="roomId" value="<?php echo $row['RoomID']; ?>">
                                <button type="submit" name="accept" class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2">Accept</button>
                            </form>
                            <!-- Cancel Request Button -->
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <input type="hidden" name="roomId" value="<?php echo $row['RoomID']; ?>">
                                <button type="submit" name="cancel" class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2">Cancel Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo "No rooms available.";
    }
    // Close connection
    $conn->close();
?> 




    </div>
</div>
        </div>
    </div>
 </div>

<?php require('inc/scripts.php'); ?>
</body>
</html>