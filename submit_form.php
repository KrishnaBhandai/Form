<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $name = ($_POST['name']);
    $fname = ($_POST['fname']);
    $age =($_POST['age']);
    $mobile =($_POST['mobile']);
    $email = ($_POST['email']);
    $password = ($_POST['pass']);
    $gender =($_POST['gender']);

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
