<?php
// Include the database configuration file
include 'Conn.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize input
    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $bio = $mysqli->real_escape_string($_POST['bio']);

    // SQL query to insert data into the profiles table
    $sql = "INSERT INTO tbl_profile (username, email, bio) VALUES ('$username', '$email', '$bio')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Profile saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Close the connection after use
$mysqli->close();
?>
