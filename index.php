<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>List of Clients</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>


<body>

    <div class = "container my-5">
        <h2 class="mb-4">List of Clients</h2>
        <table class="table table-striped">
        <a class="btn btn-primary" href="/index.php" role="button">Add New Client</a>
        <br>

        <table class="table">
                    
            <!-- TABLE -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <!-- BODY OF THE TABLE -->
            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "list-of-clients";


                    //Create Connection
                    $connection = mysqli_connect($servername, $username, $password, $database);

                    // Check Connection  
                    if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                    $sql = "SELECT * FROM clients";
                    $result = mysqli_query($connection, $sql);

                    // Check if there are results
                    if(!$result) {
                        die("Query failed: " . mysqli_error($connection));
                    }

                    // Read data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td>
                                <a href='/Php-CRUD-Application-List of Clients/edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>
                                <a href='/Php-CRUD-Application-List of Clients/delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }

                ?>

          

                <!-- PHP code to fetch and display clients will go here -->
                <td>10</td>
                <td>Alice Johnson</td>
                <td>alice.johnson@example.com</td>
                <td>555-1234</td>
                <td>123 Maple Street</td>
                <td>07/06/2025</td>

                <!-- Buttons -->
                <td>
                    <a href="/Php-CRUD-Application-List of Clients/edit.php?id=10" class="btn btn-warning">Edit</a>
                    <a href="/Php-CRUD-Application-List of Clients/delete.php?id=10" class="btn btn-danger">Delete</a>
                </td>





            </tbody>

        </table>
        


    </div>

</body>

</html>