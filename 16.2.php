<!-- processform.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Display the collected data
    echo "<h2>Form Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: form.php");
    exit();
}

