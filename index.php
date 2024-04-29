<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $name = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    // Process the data (you can perform any desired operations here)
    // For this example, we'll simply display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email. "<br>";
    echo "password: " . $password;

}

?>