<?php
include "./connection.php";
header('Content-Type: application/json'); // Set content type to JSON

// Get the department from the query parameter and escape it
$department = isset($_GET['page']) ? $_GET['page'] : '';

$sql = "SELECT * FROM birthdays WHERE Department = ?";
$stmt = $conn->prepare($sql);

// Bind the parameter to the statement
$stmt->bind_param("s", $department); // "s" indicates that the parameter is a string

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

$data = [];
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode($data); // Ensure only JSON output
} else {
    echo json_encode(['error' => $stmt->error]); // Return error if query fails
}

// Close the statement and connection
$stmt->close();
$conn->close();




   