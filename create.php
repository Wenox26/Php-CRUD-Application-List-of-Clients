<?php
    $name = ""; 
    $email = "";
    $phone = "";
    $address = ""; 
    $created_at = "";

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
       
        <form method = "post">
       
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>
          









            <!-- Submit Button -->
             <div class="mb-3">

                <div class="offset-sm-3 col-sm-3 d-grid">
                    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class ="col-sm-3 d-grid">
                    <a class ="btn btn-outline-primary" href = "/index.php" role= "button">Cancel</a>
                </div>
                
                <a class="btn btn-secondary" href="/index.php" role="button">Back to List</a>

            </div>
            
          

        </form>
    </div>
</body>




</html>