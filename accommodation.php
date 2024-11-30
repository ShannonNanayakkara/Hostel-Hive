<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Hive-ACCOMMODATION</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFC2b5wedQFLYmOlD2iUeI0t1Mn9kxaPk&callback=initMap&loading=async" defer></script>
    <?php require('inc/links.php');?>   
</head>
<body class="bg-light">

<?php require('inc/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ACCOMMODATION</h2>
    <div class="h-line custom-bg"></div>
</div> 

<div class="container">
    <!-- //room  -->
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

    // Handle button clicks
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
        $propertyId = $_POST['property_id'];

        if ($action == 'book_now') {
            // Update booking_status to 'pending' when the book now button is clicked
            $sql = "UPDATE RoomInformation SET booking_status = 'pending' WHERE RoomID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $propertyId);
            $stmt->execute();
            $stmt->close();
        } elseif ($action == 'accept_booking') {
            // Update booking_status to 'booked' when the accept button is clicked
            $sql = "UPDATE RoomInformation SET booking_status = 'booked' WHERE RoomID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $propertyId);
            $stmt->execute();
            $stmt->close();
        }
    }

    // Fetch room data from the database
    $sql = "SELECT * FROM RoomInformation WHERE Accepted=1";
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
                            <?php if ($row['booking_status'] == 'available'): ?>
    <form method="post">
        <input type="hidden" name="property_id" value="<?php echo $row['RoomID']; ?>">
        <input type="hidden" name="action" value="book_now">
        <button type="submit" class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2">Book Now</button>
    </form>
<?php elseif ($row['booking_status'] == 'pending'): ?>
    <button class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2" disabled>Pending</button>
<?php elseif ($row['booking_status'] == 'booked'): ?>
    <button class="btn btn-sm w-100 text-dark custom-bg shadow-none mb-2" disabled>Booked</button>
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
    <!-- Map Column -->
    <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-5">
          <!--iframe height="320" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5758403132254!2d80.04157289999999!3d6.8213291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1708017488781!5m2!1sen!2slk" loading="lazy"></iframe-->
          <div id="map" style="width: 500px;height: 500px;"></div>
          <script>
            function initMap() {
              const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: {
                  lat: 7.9917939,
                  lng: 79.8316158,
                },
              });

              <?php
              // Database connection details
              $hname = 'localhost';
              $uname = 'root';  // username
              $pass = '';       // password
              $db = 'hmsdb';    // database name

              // Create connection
              $conn = new mysqli($hname, $uname, $pass, $db);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // Fetch data from database
              $sql = "SELECT * FROM roominformation WHERE Accepted = 1";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  // Create a closure to encapsulate marker and infowindow
                  echo "(function() {\n";
                  echo "var marker = new google.maps.Marker({\n";
                  echo "position: {\n";
                  echo "lat: " . $row["Latitude"] . ",\n";
                  echo "lng: " . $row["Longitude"] . "\n";
                  echo "},\n";
                  echo "map,\n";
                  echo "title: '" . $row["RoomName"] . "',\n";
                  echo "});\n";

                  // Info window content
                  echo "var contentString = '<div class=\"card\" style=\"max-width: 200px;\">";
                //   echo "<img src=\"data:image/jpeg;base64," . base64_encode($row['room_image']) . "\" class=\"card-img-top\" alt=\"Room Image\">";
                  echo "<div class=\"card-body\">";
                  echo "<h5 class=\"card-title\">" . $row["RoomName"] . "</h5>";
                  echo "<h6 class=\"card-subtitle mb-3 text-muted\">Rs. " . $row["RoomPrice"] . " per year</h6>";
                  echo "<div class=\"features mb-3\">";
                  echo "<h6 class=\"mb-1\">Features</h6>";
                  echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["RoomFeatures"] . "</span>";
                  echo "</div>";
                  echo "<div class=\"facilities mb-3\">";
                  echo "<h6 class=\"mb-1\">Facilities</h6>";
                  echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["RoomFacilities"] . "</span>";
                  echo "</div>";
                  echo "<h6 class=\"mb-1\">Student count</h6>";
                  echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["student_count"] . " students</span>";
                  echo "</div>";
                  echo "</div>';\n";

                  // Info window
                  echo "var infowindow = new google.maps.InfoWindow({\n";
                  echo "content: contentString \n";
                  echo "});\n";

                  // Add click event listener to marker
                  echo "marker.addListener('click', function() {
            infowindow.open(map, marker);
        });\n";
                  echo "})();\n"; // Close the closure
                }
              }

              // Close connection
              $conn->close();
              ?>
            }

            window.initMap = initMap;
        
          </script>

        </div>
      </div>
    </div>
</div>

<?php require('inc/footer.php');?>

</body>
</html>
