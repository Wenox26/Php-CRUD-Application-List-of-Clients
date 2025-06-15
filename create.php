<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clients</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    </head>


    <body>
        <div container my-5>

            <h2>New Client</h2>   

            <form method = "post">
        
                <!-- Name -->
                <div class="row mb-3">
                    <label class = "col-sm-3 col-form-label">Name</label>
                        <div class ="col-sm-6">
                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?> ">
                        </div>
                </div>

                <!-- Email -->
                <div class="row mb-3">
                    <label class = "col-sm-3 col-form-label">Email</label>
                        <div class ="col-sm-6">
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?> ">
                        </div>
                </div>

                <!-- Phone -->
                <div class="row mb-3">
                    <label class = "col-sm-3 col-form-label">Phone</label>
                        <div class ="col-sm-6">
                            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?> ">
                        </div>
                </div>

                <!-- Address -->
                <div class="row mb-3">
                    <label class = "col-sm-3 col-form-label">Address</label>
                        <div class ="col-sm-6">
                            <input type="text" class="form-control" name="address" value="<?php echo $address; ?> ">
                        </div>
                </div>

                <!-- Submit & Cancel Button -->    
                <div class = "row mb-3">
                    <div class = "offset-sm-3 col-sm-3 d-grid">
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                    </div>
                    <div class = "col-sm-3 d-grid">
                        <a class ="btn btn-outline-primary" href = "index.php" role= "button">Cancel</a>
                    </div>

                </div>
            

            </form>
        </div>
    </body>




</html>