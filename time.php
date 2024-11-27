<?php
$file = "status.json";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Decode the incoming JSON payload
    $input = json_decode(file_get_contents('php://input'), true);

    // Read the existing JSON file
    $jsonData = file_get_contents($file);

    // Decode the existing JSON into an associative array
    $data = json_decode($jsonData, true);

    // Ensure data is an array and modify the 'endTime' field
    if (is_array($data)) {
        $data['endTime'] = microtime(true) / 1000000;

        // Re-encode the modified array into JSON
        $newJsonData = json_encode($data, JSON_PRETTY_PRINT);

        // Save the updated JSON back to the file
        file_put_contents($file, $newJsonData);
    } else {
        // Handle the case where the JSON file is invalid
        echo json_encode(["status" => "error", "message" => "Invalid JSON file."]);
    }
}
?>
