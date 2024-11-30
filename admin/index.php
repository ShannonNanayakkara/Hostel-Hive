<?php
require('inc/essentials.php');
require('inc/db_config.php');

session_start();

if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
    redirect('dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="common.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php'); ?>
    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
        .input-field {
            width: calc(100% - 18px); /* Adjust width as needed */
        }
    </style>
</head>
<body class="bg-light">

<div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
        <h4 class="bg-dark text-white py-3">LOGIN PANEL</h4>
        <div class="p-4">
            <div class="mb-3">
                <div class="btn-group" style="width: 80%;">
                    <button type="button" class="btn btn-info dropdown-toggle mb-3" data-bs-toggle="dropdown">
                        Select
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-value="admin">Admin</a></li>
                        <li><a class="dropdown-item" href="#" data-value="warden">Warden</a></li>
                        <li><a class="dropdown-item" href="#" data-value="student">Student</a></li>
                        <li><a class="dropdown-item" href="#" data-value="landlord">Landlord</a></li>
                    </ul>
                </div>
                <div class="mb-3">
                    <input id="selected_role" name="selected_role" type="hidden">
                    <input name="username" required type="text" class="form-control shadow-none text-center input-field" placeholder="Username">
                </div>
                <div class="mb-4">
                    <input name="password" required type="password" class="form-control shadow-none text-center input-field" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-dark custom-bg shadow-none">LOGIN</button>
            </div>
        </div>
    </form>
</div>

<?php
if(isset($_POST['login'])) {
    $frm_data = filteration($_POST);
    $selected_role = $frm_data['selected_role']; // Fetch selected role

    $query = "SELECT * FROM admin_creds WHERE name=? AND pass=?";
    $values = [$frm_data['username'], $frm_data['password']];

    $res = select($query, $values, "ss");

    if($res->num_rows == 1) {
        $row = $res->fetch_assoc();
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];

        // Redirect based on selected role
        switch($selected_role) {
            case 'admin':
                redirect('dashboard.php');
                break;
            case 'warden':
                redirect('wdashboard.php');
                break;
            case 'student':
                redirect('http://localhost/HMS-main/index.php');
                break;
            case 'landlord':
                redirect('ldashboard.php');
                break;
            default:
                // Default redirection or error handling
                redirect('dashboard.php'); // Change to desired default redirection
        }
    } else {
        alert('error', 'Login failed - Invalid Credentials!');
    }
}
?>

<?php require('inc/scripts.php'); ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dropdownItems = document.querySelectorAll(".dropdown-item");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                let selectedRole = this.getAttribute("data-value");
                document.getElementById("selected_role").value = selectedRole;
                document.querySelector(".dropdown-toggle").innerText = this.innerText;
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dropdownItems = document.querySelectorAll(".dropdown-item");
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function() {
                let selectedRole = this.getAttribute("data-value");
                document.getElementById("selected_role").value = selectedRole;
                document.querySelector(".dropdown-toggle").innerText = this.innerText;
            });
        });

        // Validate role selection before form submission
        document.querySelector("form").addEventListener("submit", function(event) {
            let selectedRole = document.getElementById("selected_role").value;
            if (!selectedRole) {
                event.preventDefault(); // Prevent form submission
                alert("Please select a role.");
            }
        });
    });
</script>
</html>
