<?php

$conn = mysqli_connect("localhost", "root", "", "userdb");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

// Check if email already exists
$check = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $check);

if (mysqli_num_rows($result) > 0) {

    echo "<script>
            alert('User already registered! Please Login.');
            window.location.href='login.html';
          </script>";

} else {

    // Insert new user
    $sql = "INSERT INTO users(name, email, mobile, password)
            VALUES('$name', '$email', '$mobile', '$password')";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Registration Successful!');
                window.location.href='login.html';
              </script>";

    } else {

        echo "Error: " . mysqli_error($conn);

    }
}

mysqli_close($conn);

?>