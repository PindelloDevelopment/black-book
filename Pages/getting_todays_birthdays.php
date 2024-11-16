<?php
include "./connection.php";
header('Content-Type: application/json'); 

// Get today's date in month-day format
$today = date('m-d');

// Query to fetch records with birthdays today (ignoring the year)
$sql = "SELECT * FROM birthdays WHERE DATE_FORMAT(Birthday, '%m-%d') = '$today'";

$result = $conn->query($sql);

$data = [];
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    echo json_encode($data);
} else {
    echo json_encode(['error' => $conn->error]);
}

$conn->close();
