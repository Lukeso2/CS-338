<?php
// MySQL database connection parameters
$servername = "localhost";  
$database = "mysql"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from our table
$sql = "SELECT * FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Selected rows from table:<br>";
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "$key: $value<br>";
        }
    }
} else {
    echo "No rows selected";
}

// Close connection
$conn->close();
?>
