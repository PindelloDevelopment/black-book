<?php
// Include your database connection file
include './connection.php';
header('Content-Type: application/json'); // Set content type to JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Capture and escape input values securely
    $firstname = $conn->real_escape_string($_POST['Firstname']);
    $lastname = $conn->real_escape_string($_POST['Lastname']);
    $active = $conn->real_escape_string($_POST['Active']);
    $email = $conn->real_escape_string($_POST['Email']);
    $linkedin = $conn->real_escape_string($_POST['Linkedin']);
    $birthday = $conn->real_escape_string($_POST['Birthday']);
    $location = $conn->real_escape_string($_POST['Location']);
    $serving = $conn->real_escape_string($_POST['Serving']);
    $title = $conn->real_escape_string($_POST['Title']);
    $department = $conn->real_escape_string($_POST['Department']);
    $exposure = $conn->real_escape_string($_POST['Exposure']);
    $currentCompany = $conn->real_escape_string($_POST['CurrentCompany']);
    $dayswarning = $conn->real_escape_string($_POST['DaysWarning']);
    $lastContact = $conn->real_escape_string($_POST['LastContact']);
    $lastComments = $conn->real_escape_string($_POST['LastComments']);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `birthdays`(`Firstname`, `Lastname`, `Active`, `Email`, `Linkedin`, `Birthday`, `Location`, `Serving`, `Title`, `Department`, `Exposure`, `CurrentCompany`, `days_warning`, `LastContact`, `LastComments`) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssssssssssssss", $firstname, $lastname, $active, $email, $linkedin, $birthday, $location, $serving, $title, $department, $exposure, $currentCompany, $dayswarning, $lastContact, $lastComments);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => "Account for $firstname $lastname created successfully."]);
        } else {
            echo json_encode(['success' => false, 'error' => "Error executing query: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => "Error preparing statement: " . $conn->error]);
    }
}



// Close the database connection

//fetch data
if (isset($_GET['id'])) {
    $userId = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM birthdays WHERE id='$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data); // Return user data as JSON
    } else {
        echo json_encode(["error" => "User not found"]);
    }
    exit();
}


?>
