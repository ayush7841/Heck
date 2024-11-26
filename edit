<?php
// Path to the static file you want to edit
$file = 'message.txt';

// Check if the button was pressed (form is submitted)
if (isset($_POST['btn'])) {
    // Get the new content from the form
    $newContent = $_POST['text'];

    // Check if the file is writable
    if (is_writable($file)) {
        // Open the file for writing
        $handle = fopen($file, 'w');
        
        // Write the new content to the file
        fwrite($handle, $newContent);
        
        // Close the file
        fclose($handle);

        // Redirect to the form page with a success message
        header('Location: index.html?status=success');
        exit;
    } else {
        // Redirect to the form page with an error message
        header('Location: index.html?status=error');
        exit;
    }
} else {
    // If the form is not submitted, display the form page
    echo "No data submitted!";
}
?>
