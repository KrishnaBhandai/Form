<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $fname = $conn->real_escape_string($_POST['fname']);
    $age = $conn->real_escape_string($_POST['age']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['pass']);
    $gender = $conn->real_escape_string($_POST['gender']);

    $sql = "INSERT INTO users (name, fname, age, mobile, email, password, gender) 
            VALUES ('$name', '$fname', '$age', '$mobile', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
