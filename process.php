<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // default MAMP username
$password = "root"; // default MAMP password is empty
$dbname = "peace_ratings"; // the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $funnyRating = $_POST['funny_rating'];
    $cookingRating = $_POST['cooking_rating'];
    $kidney = $_POST['kidney_answer'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO ratings (funny_rating, cooking_rating, kidney_answer) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $funnyRating, $cookingRating, $kidney); // "iis" means: int, int, string

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}
$conn->close();
?>
