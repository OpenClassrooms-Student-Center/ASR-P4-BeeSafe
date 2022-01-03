<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>BeeSafe</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="main.css">
        </head>
    <body>

    <div class="header">
        <h1>BeeSafe</h1>
        <p>A website created by me.</p>
    </div>

    <div class="navbar">
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#" class="right">Link</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            <h3>More Text</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div>
        </div>
        <div class="main">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>

    <div class="footer">
    <h2>Footer</h2>
    </div>

    </body>
</html>

<?php
include_once 'vars.php';

if (isset($servername) && isset($username) && isset($password) && isset($db) && isset($port)) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
}
?>
