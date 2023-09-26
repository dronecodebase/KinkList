<?php
include 'db_connection.php';

try {
    $postData = json_decode(file_get_contents('php://input'), true);

    if ($postData === null && json_last_error() !== JSON_ERROR_NONE) {
        // Log JSON decoding errors
        error_log("JSON Decoding Error: " . json_last_error_msg());
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data']);
        exit();
    }

    // Filter kinkData to remove empty strings
    $filteredKinkData = array_filter($postData['kinkData'], function($item) {
        return is_string($item) && strlen($item) > 0;
    });

    $stmt = $conn->prepare("INSERT INTO kinklist_data (user_id, user_name, user_email, kink_data, version) VALUES (?, ?, ?, ?, ?)");

    $user_id = (int)$postData['userId'];
    $user_name = $postData['userName'];
    $user_email = $postData['userEmail'];
    $kink_data = json_encode($filteredKinkData);
    $version = 1;

    if (!is_int($user_id) || empty($user_name) || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(['error' => 'Validation failed']);
        exit();
    }

    $stmt->bind_param("isssi", $user_id, $user_name, $user_email, $kink_data, $version);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Success response
    echo json_encode(['message' => 'Data saved successfully']);
} catch (Exception $e) {
    // Log any other exceptions
    error_log("Exception: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
