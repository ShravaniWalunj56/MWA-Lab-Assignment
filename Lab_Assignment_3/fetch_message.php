<?php
include 'db.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    // Fetch a random message from the database
    $result = $conn->query("SELECT message FROM messages ORDER BY RAND() LIMIT 1");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $message = str_replace("{name}", $name, $row['message']);
        echo $message;
    } else {
        echo "No messages found in the database.";
    }

    $conn->close();
}
?>
