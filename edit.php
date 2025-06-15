<?php
$id="";
$name= "";
$email = "";
$phone = "";
$address = "";
$database = "list-of-clients";

// Create database connection
$connection = new mysqli("localhost", "root", "", $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD']== GET){

    if(!isset($_GET["id"]) || empty($_GET["id"])){
        header("location: index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM clients WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: index.php");
        exit;
    }
}

else{

}
}




?>
 
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clients</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>


    <body>
        <div container my-5>

            <h2 class="text-center mt-5 mb-5">New Client</h2>   
            
            <!-- Error Message -->
            <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='d-flex justify-content-center'>
                    <div class='row mb-3' style='width: 1000px;'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                <strong>$errorMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>

            
            <form method = "post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                <!-- Name -->
                <div class="d-flex justify-content-center">
                      <div class="row mb-3 align-items-center" style="width: 1000px;">
                           <label class="col-sm-3 col-form-label text-end">Name</label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                              </div>
                      </div>
                </div>  

                <!-- Email -->
                <div class="d-flex justify-content-center">
                      <div class="row mb-3 align-items-center" style="width: 1000px;">
                           <label class="col-sm-3 col-form-label text-end">Email</label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                              </div>
                      </div>
                </div>  

                <!-- Phone -->
                <div class="d-flex justify-content-center">
                      <div class="row mb-3 align-items-center" style="width: 1000px;">
                           <label class="col-sm-3 col-form-label text-end">Phone</label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                              </div>
                      </div>
                </div>  

                <!-- Address -->
                <div class="d-flex justify-content-center">
                      <div class="row mb-3 align-items-center" style="width: 1000px;">
                           <label class="col-sm-3 col-form-label text-end">Address</label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                              </div>
                      </div>
                </div>  

                <!-- Success Message -->
                <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='d-flex justify-content-center'>
                        <div class='row mb-3' style='width: 1000px;'>
                            <div class='offset-sm-3 col-sm-6'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>$successMessage</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>



                <!-- Submit & Cancel Button -->
                <div class="d-flex justify-content-center">
                    <div class="row mb-3" style="width: 1000px;">
                        
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                        </div>
                    </div>
                </div>
            

            </form>
        </div>
    </body>




</html>