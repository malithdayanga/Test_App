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

<?php

if(isset($_POST['submit'])){
  $title = input_varify($_POST['title']);
  $body = input_varify($_POST['post-body']);
  $srt_nt = input_varify($_POST['srt_nt']);

  $query = "INSERT INTO post (title,srt_nt,body,create_at) VALUES ('{$title}','{$srt_nt}', '{$body}',NOW())";

  $result = mysqli_query($conn,$query);

  if($result){
    $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
      <strong>Post Create Success ..!!</strong>Your Post is visible now.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
    }else{
    echo "post not created".error($conn);
  }
}

function input_varify($data){
  
  $data = trim($data);
  $data = stripcslashes($data);
  $data = html_entity_decode($data);
  
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
                          <label for="">Short Note</label>
                          <textarea class="form-control" name="srt_nt" id="srt_nt"  rows="5"></textarea>
                          <small id="helpId" class="text-muted">Enter Short note</small>
                        </div>

                        <div class="form-group">
                          <label for=""></label>
                          <script src="plugins/ckeditor/ckeditor.js"></script>
                          <textarea class="form-control" name="post-body" id="post-body"  rows="15"></textarea>
                             <script>
                              CKEDITOR.replace( 'post-body' );
                             </script>

                          <small id="helpId" class="text-muted">Enter post details</small>
                        </div>
                        
                    </div>
                    <div class="card-footer" id="card-footer">
                        
                            <button type="submit" name="submit" class="btn btn-primary">Create Post</button>
                        
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
 
</body>
</html>