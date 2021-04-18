<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <h1>This is a Heading</h1>
        <p>This is a paragraph.</p>
    </body>
</html>

<?php
include_once 'vars.php';

if (defined($servername) && defined($username) && defined($password) && defined($db) && defined($port)) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";
}
?>