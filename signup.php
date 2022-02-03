<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
    
    <title>Document</title>
</head>
<body>

    <?php include_once("inc/navbar.php");?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card mt-4">

                <form action="index.php">
                    <div class="card-header" id="card-header">
                            <h4>Sign up form</h4>
                    </div>
                    <div class="card-body" id="card-body">
                        <div class="form-group">
                          <label for="">First Name</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your first name</small>
                        </div>

                        <div class="form-group">
                          <label for="">Last Name</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your last name</small>
                        </div>

                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your email</small>
                        </div>

                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your password</small>
                        </div>
                    </div>
                    <div class="card-footer" id="card-footer">
                        
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        
                    </div>
</form>
                </div>

            </div>
        </div>

    </div>
 
</body>
</html>