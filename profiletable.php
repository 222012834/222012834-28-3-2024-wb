<?php

// Establish database connection (replace these details with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bityeartwo2024";

// Create connection
$conn = new mysqli("localhost","root","","bityeartwo2024");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display data in HTML table
if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>