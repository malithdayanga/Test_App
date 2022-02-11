<?php
session_start(); 
?>

<?php
  require_once("inc/conn.php");
?>

<?php

if(!isset($_SESSION['user_Fname'])){

    header("Location: index.php");
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
    
    <title>Create Post</title>
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

                    <form action="createpost.php" method="POST" autocomplete="off">

                    <?php
                    if(!empty($msg)){
                      echo $msg;
                    }
?>


                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Enter title here</small>
                        </div>

                        <div class="form-group">
                          <label for=""></label>
                          <script src="plugins/ckeditor/ckeditor.js"></script>
                          <textarea class="form-control" name="post-body" id="post-body"  rows="10"></textarea>
                             <script>
                              CKEDITOR.replace( 'post-body' );
                             </script>

                          <small id="helpId" class="text-muted">Enter post details</small>
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