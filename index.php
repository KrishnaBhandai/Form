

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>
    <form action="submit_form.php" method="POST">
        Name: <input type="text" name="name" required><br><br>
        Father Name: <input type="text" name="fname" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Mobile Number: <input type="text" name="mobile" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        Gender: <br>
        Male: <input type="radio" name="gender" value="male" required>
        Female: <input type="radio" name="gender" value="female" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
