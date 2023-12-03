<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose data string
    $dataString = "Name: $name\n";
    $dataString .= "Email: $email\n";
    $dataString .= "Message:\n$message\n\n";

    // Specify the path to the file
    $filePath = "stored_data.txt";

    // Open the file in append mode
    $file = fopen($filePath, "a");

    // Write the data to the file
    fwrite($file, $dataString);

    // Close the file
    fclose($file);

    // Redirect back to the home page
    header("Location: index.html");
    exit();
}
?>
