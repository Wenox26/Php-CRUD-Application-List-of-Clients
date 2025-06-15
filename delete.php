<?php
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

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

// Get client info (optional: show name/email in confirmation)
$client = null;
$sql = "SELECT * FROM clients WHERE id = $id";
$result = $connection->query($sql);
if ($result && $result->num_rows > 0) {
    $client = $result->fetch_assoc();
} else {
    header("Location: index.php");
    exit;
}

// If form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM clients WHERE id = $id";
    $connection->query($sql);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Confirm Deletion</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2 class="text-center mt-5 mb-5">Confirm Deletion</h2>

        <div class="d-flex justify-content-center">
            <div class="row mb-3" style="width: 1000px;">
                <div class="offset-sm-3 col-sm-6">
                    <div class="alert alert-danger">
                        Are you sure you want to delete the following client?
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Info List -->
        <div class="d-flex justify-content-center mb-3">
            <div class="row" style="width: 1000px;">
                <div class="offset-sm-3 col-sm-6">
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Name:</strong> <?= htmlspecialchars($client['name']) ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($client['email']) ?></li>
                        <li class="list-group-item"><strong>Phone:</strong> <?= htmlspecialchars($client['phone']) ?></li>
                        <li class="list-group-item"><strong>Address:</strong> <?= htmlspecialchars($client['address']) ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Delete and Cancel Button -->
        <form method="post">
            <div class="d-flex justify-content-center">
                <div class="row mb-3" style="width: 1000px;">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
        
    </body>
</html>
