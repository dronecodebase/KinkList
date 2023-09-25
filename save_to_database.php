<?php
include 'db_connection.php';
// Fetch POST data
$postData = json_decode(file_get_contents('php://input'), true);

$sql = "INSERT INTO your_table_name (user_id, user_name, kink_data) VALUES ('".$postData['userId']."', '".$postData['userName']."', '".$postData['kinkData']."')";
$conn->query($sql);

?>
 
