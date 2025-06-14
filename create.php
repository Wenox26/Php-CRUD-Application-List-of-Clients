<?php
    $name = ""; 
    $email = "";
    $phone = "";
    $address = ""; 
    $created_at = "";

    $error = ""; // Initialize error variable
    $success = ""; // Initialize success variable

    // REDIRECT HERE
    header("Location: index.php");
    exit;

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $created_at = date('Y-m-d H:i:s');

        do{
            if (empty($name) || empty($email) || empty($phone) || empty($address)) {
                // If any field is empty, set an error message
                $error = "All fields are required";
                break;
            }
            
            // Add new client to the database
            $name = ""; 
            $email = "";
            $phone = "";
            $address = ""; 

            $success = "Client added successfully!";


        }while (false);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Clients</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

</head>


<body>
    <div container my-5>

        <h2>New Client</h2>   
       
        <!-- Checking if error -->
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>

        <form method = "post">
       
            <!-- Name -->
            <div class="row mb-3">
                <label class = "col-sm-3 col-form-label">Name</label>
                    <div class ="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?> " required>
                    </div>
            </div>

            <!-- Email -->
            <div class="row mb-3">
                <label class = "col-sm-3 col-form-label">Email</label>
                    <div class ="col-sm-6">
                        <input type="text" class="form-control" id="name" name="email" value="<?php echo $email; ?> " required>
                    </div>
            </div>

            <!-- Phone -->
            <div class="row mb-3">
                <label class = "col-sm-3 col-form-label">Phone</label>
                    <div class ="col-sm-6">
                        <input type="text" class="form-control" id="name" name="phone" value="<?php echo $phone; ?> " required>
                    </div>
            </div>

            <!-- Address -->
            <div class="row mb-3">
                <label class = "col-sm-3 col-form-label">Address</label>
                    <div class ="col-sm-6">
                        <input type="text" class="form-control" id="name" name="address" value="<?php echo $address; ?> " required>
                    </div>
            </div>
            

            <!-- Check if success -->
            <?php elseif (!empty($success)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>

            <!-- Submit & Cancel Button -->    
            <div class = "row mb-3">
                <div class = "offset-sm-3 col-sm-3 d-grid">
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                </div>
                <div class = "col-sm-3 d-grid">
                    <a class ="btn btn-outline-primary" href = "/" role= "button">Cancel</a>
                </div>

            </div>
          

        </form>
    </div>
</body>




</html>