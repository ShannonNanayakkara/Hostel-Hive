<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "hmsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        // Remove unnecessary strip_tags function
        // $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    global $conn; // Use the global $conn variable for database connection
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Use mysqli_stmt_bind_param instead of mysqli_stmt_bind-param
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            // Use mysqli_stmt_get_result instead of mysqli_stmt_get_results
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed-Select");
        }
    } else {
        die("Query cannot be prepared-Select");
    }
}
?>
