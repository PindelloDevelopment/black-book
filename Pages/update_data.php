<?php

ini_set('display_errors', 1);
include './connection.php'; // Your connection file
header('Content-Type: application/json');

// Retrieve and sanitize POST data
$userId = $conn->real_escape_string($_POST['id']);
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

// Prepare the update statement
$stmt = $conn->prepare("UPDATE birthdays SET 
            Firstname = ?, 
            Lastname = ?, 
            Active = ?, 
            Email = ?, 
            Linkedin = ?, 
            Birthday = ?, 
            Location = ?, 
            Serving = ?, 
            Title = ?, 
            Department = ?, 
            Exposure = ?, 
            CurrentCompany = ?,
            days_warning = ?,
            LastContact = ?, 
            LastComments = ? 
        WHERE id = ?");

// Bind parameters to the statement
$stmt->bind_param("ssssssssssssssss", 
    $firstname, 
    $lastname, 
    $active, 
    $email, 
    $linkedin, 
    $birthday, 
    $location, 
    $serving, 
    $title, 
    $department, 
    $exposure, 
    $currentCompany, 
    $dayswarning,
    $lastContact, 
    $lastComments, 
    $userId
);

// Execute the statement and check for success
if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Record updated successfully."]);
} else {
    echo json_encode(["success" => false, "message" => "Error updating record: " . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

