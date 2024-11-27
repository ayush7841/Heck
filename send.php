<?php
// Set content type to JSON
header('Content-Type: application/json');

// Path to the text file
$filename = "message.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Read the file contents
    $data = file_get_contents($filename);

    // Respond with the file content as JSON
    echo json_encode(["status" => "success", "data" => $data]);
} else {
    // Respond with an error if the file doesn't exist
    echo json_encode(["status" => "error", "message" => "File not found"]);
}
?>
