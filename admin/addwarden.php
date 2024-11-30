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
    <title>Admin Panel-Dashboard</title>
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
        <h4 class="navbar-brand" href="#">Admin Panel</h4>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
        <ul class="nav nav-pills flex-column">
           
           <li class="nav-item">
             <a class="nav-link text-white" href="dashboard.php">Add Student</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="addwarden.php">Add Warden</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-white" href="addlandlord.php">Add Landlord</a>
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-lines-fill fs-3 me-2"></i>Warden Registration
        </h5>
    </div>
    <div class="modal-body">                   
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ps-0 nb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control shadow-none">  
                </div>
                <div class="col-md-6 p-0 nb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control shadow-none">  
                </div>
                <div class="col-md-6 ps-0 nb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control shadow-none">  
                </div>                            
                <div class="col-md-12 p-0 nb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control shadow-none" rows="1"></textarea>  
                </div>                            
                <div class="col-md-6 p-0 nb-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control shadow-none">  
                </div>
                <div class="col-md-6 p-0 nb-3 ml-2">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control shadow-none">  
                </div>                            
            </div>
        </div>
        <div class="text-center my-1"></div>
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
    </div>
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['date_of_birth'];
    $password = $_POST['password'];

    // Prepare SQL statement to insert data into the Wardens table
    $sql = "INSERT INTO Wardens (name, email, phone_number, address, date_of_birth, password)
            VALUES ('$name', '$email', '$phone_number', '$address', '$date_of_birth', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New warden added successfully");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>



<?php require('inc/scripts.php'); ?>
</body>
</html>
