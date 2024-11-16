<?php
include './connection.php';
header('Content-Type: application/json');


$sql = "SELECT * FROM birthdays";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
   echo json_encode($data);
} else {
    echo json_encode(['success' => false, 'error' => 'No data found']);
}

$conn->close();
?>
