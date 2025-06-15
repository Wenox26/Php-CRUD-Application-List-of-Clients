<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>


<body>

    <div class = "container my-5">
        <h2>List of Clients</h2>

        <table class="table table-striped">
        <a class="btn btn-primary" href="create.php" button">Add New Client</a>
        <br>

        <table class="table">
                    
            <!-- TABLE -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
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
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check Connection  
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }


                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                    // Check if there are results
                    if(!$result) {
                        die("Query failed: " . $connection->error);
                    }

                    // Read data of each row
                    while($row = $result->fetch_assoc()) {
                       echo "
                       
                       <tr>

                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        
                        <td>
                            <a href='/Php-CRUD-Application-List of Clients/edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a>
                            <a href='/Php-CRUD-Application-List of Clients/delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                         </td>

                        </tr>
                        ";
 
                    }

                ?>


            </tbody>

        </table>
        


    </div>

</body>

</html>