<?php
// Path to the static file you want to send and clear
$file = 'message.txt';

// Check if the file exists
if (file_exists($file)) {
    // Get the file contents
    $fileContent = file_get_contents($file);

    // Set the content-type header (optional, depending on how you want to serve the file)
    header('Content-Type: text/plain');
    
    // Send the file content as the response to the client
    echo $fileContent;

    // Clear the file data by overwriting it with an empty string
    file_put_contents($file, ''); // This empties the file

} else {
    // If the file doesn't exist, return an error message
    header('HTTP/1.1 404 Not Found');
    echo "Error: File not found.";
}
?>
