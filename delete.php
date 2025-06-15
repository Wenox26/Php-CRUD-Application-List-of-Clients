<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "list-of-clients";
    $connection = new mysqli($servername, $username, $password, $database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // SQL query to delete the client
    $sql = "DELETE FROM clients WHERE id =$id";
    $connection->query($sql);
    
}

header("location: index.php");
exit;

?>