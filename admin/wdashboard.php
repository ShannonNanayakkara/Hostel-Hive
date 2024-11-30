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
        <h4 class="navbar-brand" href="#">Warden Panel</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="messages.php">All property details</a>
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

    // Check if the accept form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['roomId'])) {
        $roomId = $_POST['roomId'];
        
        // Prepare an update statement to set Accepted = 1
        $sql = "UPDATE RoomInformation SET Accepted = 1 WHERE RoomID = ?";
        
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $roomId);
            
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                echo "<script>alert('Room accepted successfully.');</script>";
            } else {
                echo "<script>alert('Error accepting room.');</script>";
            }
            
            // Close statement
            $stmt->close();
        } else {
            echo "<script>alert('Error preparing statement.');</script>";
        }
    }

    // Fetch room data from the database
    $sql = "SELECT * FROM RoomInformation";
    $result = $conn->query($sql);

    // Check if there are any rooms available
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Fetch the value of the "Accepted" column for the current room
            $Accepted = $row['Accepted'];
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
                            <!-- Conditional Button based on Accepted value -->
                            <?php if ($Accepted == 1): ?>
                                <button type="button" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" disabled>You accepted this room</button>
                            <?php else: ?>
                                <!-- Accept Button -->
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <input type="hidden" name="roomId" value="<?php echo $row['RoomID']; ?>">
                                    <button type="submit" class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2">Accept</button>
                                </form>
                            <?php endif; ?>
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

<?php require('inc/scripts.php'); ?>
</body>
</html>