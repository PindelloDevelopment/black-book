<?php 
include './connection.php';
//delet
if (isset($_POST['delete'])) {
    $userId = $conn->real_escape_string($_POST['id']);
    
    $sql = "DELETE FROM birthdays WHERE id='$userId'";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Record deleted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error deleting record: " . $conn->error]);
    }
    exit();
}
?>