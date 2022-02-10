<?php
session_start(); 
?>

<?php
  require_once("inc/conn.php");
?>

<?php

if(isset($_POST['submit'])){

  $email = "";
  $password = "";
  $msg = "";

$email = input_varify($_POST['email']);
$password = input_varify($_POST['password']);


$query1 = "SELECT * FROM user WHERE email = '{$email}' AND pwd = '{$password}' LIMIT 1";

$ShowResult = mysqli_query($conn, $query1);

if($ShowResult){
    if(mysqli_num_rows($ShowResult) == 1){

        $user = mysqli_fetch_assoc($ShowResult);
        $_SESSION['user_Fname'] = $user['Fname'];
        $_SESSION['user_Fname'] = $user['Fname'];

    header("Location: index.php");

  }
  else{
    
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Sorry !!</strong> Please check your email or password.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    
  }
}
}

function input_varify($data){
  
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);

return $data;
}
?>

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

                
                    <div class="card-header" id="card-header">
                            <h4>Sign in form</h4>
                    </div>
                    <div class="card-body" id="card-body">

                    <form action="signin.php" method="POST" autocomplete="off">

                    <?php
                    if(!empty($msg)){
                      echo $msg;
                    }
?>


                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your email</small>
                        </div>

                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter your password</small>
                        </div>
                        
                    </div>
                    <div class="card-footer" id="card-footer">
                        
                            <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                        
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
 
</body>
</html>